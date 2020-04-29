<?php
session_start();
include "config.php";

$id = mysqli_real_escape_string($con,$_POST['id']);
$image = mysqli_real_escape_string($con,$_POST['image']);
$eventname = mysqli_real_escape_string($con,$_POST['eventname']);
$description = mysqli_real_escape_string($con,$_POST['description']);
$contactname = mysqli_real_escape_string($con,$_POST['contactname']);
$phone = mysqli_real_escape_string($con,$_POST['phone']);
$contactemail = mysqli_real_escape_string($con,$_POST['contactemail']);
$location = mysqli_real_escape_string($con,$_POST['location']);
$date = mysqli_real_escape_string($con,$_POST['date']);
(`eventname`, `image`, `description`, `contactname`, `phone`, `contactemail`, `location`, `date`)


if ( $eventname != "" && $description !== "" && $contactname !== "" && $phone !== "" && $contactemail !== "" && $location !== "" && $date !== "" ){
    if($id!=""){
        
        $sql_query = "UPDATE `events` SET `name`='$eventname',`description`='$description',`contactname`='$contactname',`telephone`='$phone',`email`='$email',`location`='$location',`date`='$date' WHERE tableid= '$id'";
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
        $sql = "INSERT INTO `events`(`name`, `image`, `description`, `contactname`, `telephone`, `email`, `location`, `date`) VALUES ((`eventname`, `image`, `description`, `contactname`, `phone`, `contactemail`, `location`, `date`)";
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
