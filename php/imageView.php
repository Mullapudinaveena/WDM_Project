<?php
    require_once "config.php";
    if(isset($_GET['image_id'])) {
        $sql = "SELECT imageType,image FROM portfolio_projects WHERE id=" . $_GET['image_id'];
		$result = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($con));
		$row = mysqli_fetch_array($result);
		header("Content-type: " . $row["imageType"]);
        echo $row["image"];
	}
	mysqli_close($conn);
?>