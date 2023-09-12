<?php 
session_start();
if (empty($_SESSION['admin']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Dashboard - RHMS</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<style type="text/css">
	.total{
		height: 120px;
		color:black;
		width: 170px;
		border: 2px solid #408080;
		margin-top: 25px;
		margin-left: 34px;
		background-image:linear-gradient(whitesmoke,lightgray);
		float: left;
		text-align: center;
		padding-top: 20px;
	}
	.total:hover{
		background-image:linear-gradient(lightgray,whitesmoke);
		transition-duration:0.7s;
	}
	.total hr{
		border: 1px solid #408080;
	}
	</style>
</head>
<body>
	<div class="wrapper">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
		<div class="right">
			<div class="total">
				<b style="font-size:18px;">Total Receptionist</b><hr>
				<?php
				require_once "../includes/connect.php";
				$con=mysqli_connect("localhost","root","","hospital");
				$sql = "SELECT * FROM `users` WHERE `type`='Reception'";
				$query = mysqli_query($con,$sql);
				echo "<br><b style='color:black; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div>

			<div class="total">
				<b style="font-size:18px;">Total Doctors</b><hr>
				<?php
				require_once "../includes/connect.php";
				$con=mysqli_connect("localhost","root","","hospital");
				$sql = "SELECT * FROM `users` WHERE `type`='NormalDoctor' OR `type`='DentalDoctor' OR `type`='WomenDoctor'";
				
				$query = mysqli_query($con,$sql);
				echo "<br><b style='color:black; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div>

			<div class="total">
				<b style="font-size:18px;">Total Laboratorist</b><hr>
				<?php
				require_once "../includes/connect.php";
				$con=mysqli_connect("localhost","root","","hospital");
				$sql = "SELECT * FROM `users` WHERE `type`='Laboratory'";
				$query = mysqli_query($con,$sql);
				echo "<br><b style='color:black; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div>
			<div class="total">
				<b style="font-size:18px;">Total Admins</b><hr>
				<?php
				require_once "../includes/connect.php";
				$con=mysqli_connect("localhost","root","","hospital");
				$sql = "SELECT * FROM `users` WHERE `type`='Admin'";
				
				$query = mysqli_query($con,$sql);
				echo "<br><b style='color:black; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div>

			<div class="total">
				<b style="font-size:18px;">Total Pharmatist</b><hr>
				<?php
				require_once "../includes/connect.php";
				$con=mysqli_connect("localhost","root","","hospital");
				$sql = "SELECT * FROM `users` WHERE `type`='Pharmacy'";
				$query = mysqli_query($con,$sql);
				echo "<br><b style='color:black; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div>
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>