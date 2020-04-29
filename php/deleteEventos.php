<?php
session_start();
include "config.php";

$id = mysqli_real_escape_string($con,$_POST['id']);
$vedio = mysqli_real_escape_string($con,$_POST['vedio']);
$description = mysqli_real_escape_string($con,$_POST['description']);
$URLname = mysqli_real_escape_string($con,$_POST['URLname']);




if($id!=""){
    
    $sql_query = "DELETE FROM `videos` WHERE `tableid`=`$id`";
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