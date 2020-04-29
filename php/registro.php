<?php
session_start();
include "config.php";

$uname = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$address = mysqli_real_escape_string($con,$_POST['address']);



// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);



if ($uname != "" && $password != "" && $email !== "" && $address !== ""){

    $sql_query = "select userid from users where username='".$uname."' ";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $currentuser = $row['userid'];

    if($currentuser > 0){
        echo "Username already exists";
    } else {
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 10) {
            echo 'Password should be at least 8 to 10 characters in length and should include at least one upper case letter, one number, and one special character.';
        }else{
            $sql_query = "INSERT INTO users(username, email, password, address, adminflag) VALUES('$uname', '$email', '$password', '$address', '0' )";

            if(mysqli_query($con, $sql_query)){
                $_SESSION["uname"] = $uname;
                $to=$email;
                $subject="Email Confirmation";
                $message="You are successful registered!!";
                $header="From: naveena.mullapudi@mavs.uta.edu";
                $header="MIME-Version: 1.0"."\r\n";
                mail($to, $subject, $message, $header);
                echo 2;
            } else {
                echo "ERROR: Could not able to register "; 
            }
        }
        
             
    }
} else {
    echo "Please fill all fields";
}

?>