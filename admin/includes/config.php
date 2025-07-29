<?php
define('DB_SERVER','localhost');
define('DB_USER','igenius_web');
define('DB_PASS' ,'Nayx474?3');
define('DB_NAME', 'igenius_web');
$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>