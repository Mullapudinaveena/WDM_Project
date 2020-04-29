<?php
session_start();
include "config.php";


$id = mysqli_real_escape_string($con,$_POST['id']);
$image = mysqli_real_escape_string($con,$_POST['image']);
$projectname = mysqli_real_escape_string($con,$_POST['projectname']);
$description = mysqli_real_escape_string($con,$_POST['description']);
$purpose = mysqli_real_escape_string($con,$_POST['purpose']);
$values = mysqli_real_escape_string($con,$_POST['values']);
$methods = mysqli_real_escape_string($con,$_POST['methods']);
$associations = mysqli_real_escape_string($con,$_POST['associations']);
$research = mysqli_real_escape_string($con,$_POST['research']);


if($id!=""){
    
    $sql_query = "DELETE FROM `projects` WHERE `tableid`=`$id`";
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