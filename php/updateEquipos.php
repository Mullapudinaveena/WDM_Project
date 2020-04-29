<?php
session_start();
include "config.php";

$id = mysqli_real_escape_string($con,$_POST['id']);
$image = mysqli_real_escape_string($con,$_POST['image']);
$name = mysqli_real_escape_string($con,$_POST['name']);
$description = mysqli_real_escape_string($con,$_POST['description']);
$telephone = mysqli_real_escape_string($con,$_POST['telephone']);
$email = mysqli_real_escape_string($con,$_POST['email']);


if ( $name != "" && $description !== "" && $telephone !== "" && $email !== "" ){
    if($id!=""){
        
        $sql_query = "UPDATE `members` SET `name`='$name',`description`='$description',`telephone`='$telephone',`email`='$email' WHERE tableid= '$id'";
        if ($con->query($sql_query) === TRUE){
            if(mysqli_affected_rows($con)==1){
                echo "Record updated successfully, Please reload";
            } else {
                echo "Invalid userid ";   
            }
        } else {
            echo "Invalid userid " . $con->error;
        }

    } else {
        echo "inside add";
        $sql = "INSERT INTO `members`( `name`, `description`, `telephone`, `email`) VALUES ($name, $description, $telephone, $email)"
        echo $sql;
        echo "1-- ".$con
        if(mysqli_query($con, $sql)){
            echo "Record inserted successfully. Please reload";
        } else {
            echo "ERROR: Could not able to execute ";
        }
    }
} else {
    echo "Empty data passed";
} 

 mysqli_close($con);
?>
