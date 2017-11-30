<?php session_start();
if(!isset($_SESSION['u2'])){
}
$servername="localhost";
$username="magnaex";
$password="w@aA5X$7BDhCrW";
$dbname="magnaex";
$conn=new MySQLi($servername,$username,$password,$dbname);
if($conn->connect_error) {
	die("error");
}

$servername="localhost";
$username="magnaex";
$password="w@aA5X$7BDhCrW";
$dbname="magnaex";
$conn=new MySQLi($servername,$username,$password,$dbname);
if($conn->connect_error) {
	die("error");
}
$db = new PDO('mysql:host=localhost;dbname=magnaex;charset=utf8', 'magnaex', 'w@aA5X$7BDhCrW'); 
$conk=mysqli_connect("localhost","magnaex","w@aA5X$7BDhCrW","magnaex");
?>