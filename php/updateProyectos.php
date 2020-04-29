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


if ( $name != "" && $description !== "" && $telephone !== "" && $email !== "" ){
    if($id!=""){
        
        $sql_query = "UPDATE `projects` SET `name`='$projectname',`description`='$description',`purpose`='$purpose',`values`='$values', `methods`=`$methods`, `investigation`=`$investigation`, `associations`=`$associations`, `research`=`$research` WHERE tableid= '$id'";
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
        $sql = "INSERT INTO `projects`(`name`, `description`, `purpose`, `values`, `methods`, `investigation`, `associations`, `research`) VALUES (`$projectname`, `$description`, `$purpose`, `$values`, `$methods`, `$associations`, `$research`)"
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
