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
	<title>Users - RHMS</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<style>
		#new{
			font-size:20px;
		}
		#new tr:hover{
			background-color:#ccc;
		}
	</style>
</head>
<body>
	<div class="wrapper">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
		<div class="right"><br>
			<a href="adduser.php" style="margin-left:10px;"><button class="btnlink">Add User</button></a><br><br>
			<table class="table" id="new" bgcolor="lightgray">
				<tr>
					<th><b>Username</b></th>
					<th><b>UserType</b></th>
					<th><b>Edit</b></th>
					<th><b>Delete</b></th>
				</tr>
				<?php 
				require '../includes/admin.php';
				users();
				 ?>
			</table>
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>