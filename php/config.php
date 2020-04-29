<?php
session_start();
$host = "localhost"; /* Host name */
$user = "nxm1645_admin"; /* User */
$password = "Wdmproject@"; /* Password */
$dbname = "nxm1645_wdm_project"; /* Database name */


$con = mysqli_connect($host, $user, $password,$dbname);
mysqli_query("SET CHARACTER_SET_CLIENT='utf8'",$conn);

mysqli_query("SET CHARACTER_SET_RESULTS='utf8'",$conn);

mysqli_query("SET CHARACTER_SET_CONNECTION='utf8'",$conn);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}