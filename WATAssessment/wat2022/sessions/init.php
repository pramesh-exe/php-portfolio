<?php
/*
define("USERNAME", "root");
define("PASSWORD","");
define("HOST","localhost:3306");
define("DATABASE","studentd");
$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE) or die("Unable to connect to the database");
*/
$duser="root";
$dhost="localhost";
$dpass="";
$ddb="77297983";
$connection=mysqli_connect($dhost, $duser, $dpass, $ddb) or die("Unable to connect to the database");
session_start();
?>