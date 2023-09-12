<?php 
session_start();
if (empty($_SESSION['pharmacy']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
else{
	$id = $_GET['id'];

	require_once "../includes/connect.php";
	$con=mysqli_connect("localhost","root","","hospital");
	$sql = "DELETE FROM `medicine` WHERE `id`='$id'";
	$query = mysqli_query($con,$sql);
	if (!empty($query)) {
		header("Location: medical.php");
	}
}
?>