<?php
session_start();
include "config.php";

$uname = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);

if ($uname != "" && $password != ""){

    $sql_query = "select userid from users where username='".$uname."' and password='".$password."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $currentuser = $row['userid'];

    if($currentuser > 0){
        if($uname=="admin")
        {
        $_SESSION["uname"] = $uname;
        echo 1;
        }
        else
        {
             $_SESSION["uname"] = $currentuser;;
        echo 2;
        }
    }else{
        echo 0;
    }

}
else 
{
    echo 0;
}

?>