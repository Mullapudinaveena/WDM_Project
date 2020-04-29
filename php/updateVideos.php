<?php
session_start();
include "config.php";

$id = mysqli_real_escape_string($con,$_POST['id']);
$vedio = mysqli_real_escape_string($con,$_POST['vedio']);
$description = mysqli_real_escape_string($con,$_POST['description']);
$URLname = mysqli_real_escape_string($con,$_POST['URLname']);


if ( $vedio != "" && $description !== "" && $URLname !== "" ){
    if($id!=""){
        
        $sql_query = "UPDATE `videos` SET `name`=``$name,`video`=`$vedio`,`descritpion`=`$description`,`url`=`$URLname` WHERE `tableid`=`$id`";
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
        $sql = "INSERT INTO `videos`(`name`, `video`, `descritpion`, `url`) VALUES (`$name`, `$vedio`, `$description`, `$URLname`)"
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
