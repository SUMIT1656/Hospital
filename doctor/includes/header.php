<!DOCTYPE html>
<head>
	<title>Home</title>
	<style>
		.header b{
			font-weight:900;
			font-size:22px;
		}
		</style>
<div class="header">
	<div class="headerleft">
		<b>RGUKT Hospital Management System</b>
	</div>
	<div class="headerright">
		<b>
			<?php
			require '../includes/connect.php';
			require '../includes/users.php';
			doctordetails();
			 ?>
		</b>
	</div>
</div>