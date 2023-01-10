<?php
$servername="localhost";
$username="root";
$password="";
$dbname="pumpiot";

$connect=mysqli_connect($servername,$username,$password,$dbname);
if(!$connect){
	echo '<script>alert("cannot connect to the database");history.back()</script>';
}
?>