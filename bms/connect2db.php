<?php
// database connection file 
$mysqli_host= 'localhost';
$mysqli_user='root';
$mysqli_password='';
$mysqli_db='bms';
$connection_error_message = "Ooop Couldn't connect to server";
$con = mysqli_connect($mysqli_host,$mysqli_user,$mysqli_password,$mysqli_db);

?>