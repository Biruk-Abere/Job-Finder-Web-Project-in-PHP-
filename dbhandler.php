<?php 
$servername = "localhost";
$username ="root";
$password="";
$dbname = "DreamJobFinder";

$conn = mysqli_connect($servername , $username , $password , $dbname);
if (!$conn) {
	# code...
	die("Connection failed".mysqli_connect_error);
}

 ?>