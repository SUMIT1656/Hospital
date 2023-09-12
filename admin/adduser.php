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
	<title>Add User - RHMS</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body>
	<div class="wrapper">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
		<div class="right"><br>
			<a href="users.php" style="margin-left:10px;"><button class="btnlink">View Users</button></a><br>
			<center>
				<form action="adduser.php" method="POST">
				<input type="text" name="username" class="form" placeholder="Enter Username" required="required"><br><br>
				<select name="type" class="form" required="required">
					<option value="">Choose Type</option>
					<option>Admin</option>
					<option>NormalDoctor</option>
					<option>DentalDoctor</option>
					<option>Gynaecologist</option>
					<option>Reception</option>
					<option>Pharmacy</option>
					<option>Laboratory</option>
				</select><br><br>
				<input type="text" name="fname" class="form" placeholder="Enter Firstname" required="required"><br><br>
				<input type="text" name="sname" class="form" placeholder="Enter Surname" required="required"><br><br>
				<input type="password" name="password" placeholder="Enter Password" class="form" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number,one uppercase,one lowercase letter and at least 8 or more characters" required><br><br>
				<input type="password" name="password2" placeholder="Re-Enter Password" class="form" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number,one uppercase,one lowercase letter and at least 8 or more characters" required><br><br>
				<input type="submit" value="Add" class="btnlink" name="btn">
			</form>
			<?php 
			extract($_POST);
			if (isset($btn) && !empty($username) && !empty($password) &&!empty($type) && !empty($password2)) {
				if ($password != $password2) {
					echo "<br><b style='color:red;font-size:14px;font-family:Arial;'>Password Must Match</b>";
				}else{
					require "../includes/admin.php";
					adduser();
				}
			}
			 ?>
			</center>
			
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>