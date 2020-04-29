<?php
session_start();
include "config.php";

$id = mysqli_real_escape_string($con,$_POST['id']);
$image = mysqli_real_escape_string($con,$_POST['image']);
$name = mysqli_real_escape_string($con,$_POST['name']);
$description = mysqli_real_escape_string($con,$_POST['description']);
$telephone = mysqli_real_escape_string($con,$_POST['telephone']);
$email = mysqli_real_escape_string($con,$_POST['email']);





if($id!=""){
    
    $sql_query = "DELETE FROM `members` WHERE `tableid`=`$id`";
    if ($con->query($sql_query) === TRUE){
        if(mysqli_affected_rows($con)==1){
            echo "Record updated successfully, Please reload";
        } else {
            echo "Invalid userid ";   
        }
    } else {
        echo "Invalid userid " . $con->error;
    }

?>