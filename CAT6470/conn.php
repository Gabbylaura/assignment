<?php session_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', '6470');
$conn=mysqli_connect (DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE)
or die ('I cant connect to the database.');
 ?>