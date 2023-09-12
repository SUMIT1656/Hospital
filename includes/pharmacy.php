<?php 

function patients()
{
			//$typee = $_SESSION['type'];
			$sql = "SELECT * From `medication` WHERE  `status`='pharmacy'";
			$con=mysqli_connect("localhost","root","","hospital");
	$query = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($query)) {
		$ido = $row['patient_id'];
		$sql2 = "SELECT * FROM `patient` WHERE `id`='$ido'";
		$query2 = mysqli_query($con,$sql2);
		while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
			echo "<td><center>P-".$row2['id']."</center></td>";
			echo "<td><center>".$row2['fname']."</center></td>";
			echo "<td><center>".$row2['sname']."</center></td>";
			echo "<td><center>".$row2['sex']."</center></td>";
			echo "<td><center>".$row2['birthyear']."</td>";
			echo "<td><center><a href='medicine.php?id=".$row['id']."'>view</a></center></td>";
			echo "</tr>";
		}
		
	}
}

function addmedicine()
{
			$price = trim(htmlspecialchars($_POST['price']));
			if (!empty($price)) {
				$id = $_GET['id'];
				@require_once "connect.php";
				$con=mysqli_connect("localhost","root","","hospital");
				$sql = "UPDATE `medication` SET `status`='finish',`medical_price`='$price'  WHERE `id`='$id'";
				$query = mysqli_query($con,$sql);
				if (!empty($query)) {
					echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>Finished!<br>The Patient got Discharged :)</b><br><br>";
				}
			}
}

function addmedicines()
{
			$name = trim(htmlspecialchars($_POST['name']));
			$price = trim(htmlspecialchars($_POST['price']));
			if (!empty($name)&&!empty($price)) {
				@require_once "connect.php";
				$con=mysqli_connect("localhost","root","","hospital");
				//$sql = "UPDATE `medication` SET `status`='finish',`medical_price`='$price'  WHERE `id`='$id'";
				$sql = "INSERT INTO `medicine` VALUES ('','$name','$price')";
				$query = mysqli_query($con,$sql);
				if (!empty($query)) {
					echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>Medicine Added</b><br><br>";
				}
			}
}

function updatemedicines()
{
			$name = trim(htmlspecialchars($_POST['name']));
			$price = trim(htmlspecialchars($_POST['price']));
			if (!empty($name)&&!empty($price)) {
				@require_once "connect.php";
				$con=mysqli_connect("localhost","root","","hospital");
				$id = $_GET['id'];

				$sql = "UPDATE `medicine` SET `medicine_name`='$name',`price`='$price'  WHERE `id`='$id'";
				//$sql = "INSERT INTO `medicine` VALUES ('','$name','$price')";
				$query = mysqli_query($con,$sql);
				if (!empty($query)) {
					echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>Medicine Updated</b><br><br>";
				}
			}
}

function searchmedicine()
{
			require 'connect.php';
			$name = $_GET['s'];
				$sql2 = "SELECT * FROM `medicine` WHERE `medicine_name` LIKE '%$name%'";
				$con=mysqli_connect("localhost","root","","hospital");
				$query2 = mysqli_query($con,$sql2);
		while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
		echo "<td>".$row2['medicine_name']."</td>";
		echo "<td>".$row2['price']."</td>";
		echo "<td><center><a href='editmedicine.php?id=".$row2['id']."'><img src='../assets/img/glyphicons-151-edit.png' height='16px' width='17px'></a></center></td>";
		echo "<td><center><a href='deletemedicine.php?id=".$row2['id']."'><img src='../assets/img/glyphicons-17-bin.png' height='16px' width='12px'></a></center></td>";
	
		echo "</tr>";
		}
}

function searchpatients()
{
	$name = $_GET['s'];
	$sql = "SELECT * From `medication` WHERE  `status`='pharmacy'";
	$con=mysqli_connect("localhost","root","","hospital");
	$query = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($query)) {
		$ido = $row['patient_id'];
		$sql2 = "SELECT * FROM `patient` WHERE `id`='$ido' AND `id` LIKE '%$name%'";
		$query2 = mysqli_query($con,$sql2);
		while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
			echo "<td>P-".$row2['id']."</td>";
			echo "<td>".$row2['fname']."</td>";
			echo "<td>".$row2['sname']."</td>";
			echo "<td>".$row2['sex']."</td>";
			echo "<td><center><a href='medicine.php?id=".$row['id']."'>view</a></center></td>";
			echo "</tr>";
		}
		
	}
}

function medicine()
{
	@require 'connect.php';
	$sql = "SELECT * FROM `medicine`";
	$con=mysqli_connect("localhost","root","","hospital");
	$query = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($query)) {
		echo "<tr height=30px'>";
		echo "<td>".$row['medicine_name']."</td>";
		echo "<td>".$row['price']."</td>";
		echo "<td><center><a href='editmedicine.php?id=".$row['id']."'><img src='../assets/img/glyphicons-151-edit.png' height='16px' width='17px'></a></center></td>";
		echo "<td><center><a href='deletemedicine.php?id=".$row['id']."'><img src='../assets/img/glyphicons-17-bin.png' height='16px' width='12px'></a></center></td>";
	
		echo "</tr>";
	}
}

function settings()
{
	//$username = trim(htmlspecialchars($_POST['username']));
	$fname = trim(htmlspecialchars($_POST['fname']));
	$sname = trim(htmlspecialchars($_POST['sname']));
	$password2 = trim(htmlspecialchars($_POST['password2']));
	$password = trim(htmlspecialchars($_POST['password']));
	if ($password != $password) {
		echo "<br><b style='color:red;font-size:14px;font-family:Arial;'>Password Must Match</b>";
	}
	else{
		$pass = sha1($password);
		$name = $_SESSION['pharmacy'];
		$type = $_SESSION['type'];
		$con=mysqli_connect("localhost","root","","hospital");
				$sql = "UPDATE `users` SET `fname`='$fname',`sname`='$sname',`password`='$pass' WHERE `username`='$name' AND `type`='$type'";
				$query = mysqli_query($con,$sql);
				if (!empty($query)) {
					echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>Succesifully Updated</b>";

				}	
		}
	}
?>