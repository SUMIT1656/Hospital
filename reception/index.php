<?php 
session_start();
if (empty($_SESSION['reception']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reception Dashboard - RHMS</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<style type="text/css">
	.total{
		height: 120px;
		width: 170px;
		border: 2px solid #408080;
		background-image:linear-gradient(whitesmoke,lightgrey);
		margin-top: 5px;
		margin-bottom: 5px;
		margin-left: 30%;
		text-align: center;
		padding-top: 20px;
	}
	.total:hover{
		background-image:linear-gradient(lightgrey,whitesmoke);
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
		<div style="padding-left:20px;padding-top:20px;">
			Welcome, <b>Receptionist</b><br><br>
			In your Dashboard you can do the following jobs,<br><br>
			<ol>
				<li>Add Patients</li><br>
				<li>Edit Patients</li><br>
				<li>Delete Patients</li><br>
				<li>Search Patients</li><br>
			</ol>
		</div>
			<div class="total">
				<b>Total Patients</b><hr>
				<?php
				require_once "../includes/connect.php";
				$con=mysqli_connect("localhost","root","","hospital");
				$sql = "SELECT * FROM `patient`";
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