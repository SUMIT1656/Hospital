<?php 

function patients()
{
			//$typee = $_SESSION['type'];
			$sql = "SELECT * From `medication` WHERE  `status`='laboratory'";
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
			echo "<td><center><a href='test.php?id=".$row['id']."'>view</a></center></td>";
			echo "</tr>";
		}
		
	}
}

function resultpatients()
{
			//$typee = $_SESSION['type'];
			$sql = "SELECT * From `medication` WHERE  `status`='labdoctor' OR `status`='pharmacy' OR `status`='finish'";
			$con=mysqli_connect("localhost","root","","hospital");
	$query = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($query)) {
		$ido = $row['patient_id'];
		//$result = $row['patient_id'];
		$sql2 = "SELECT * FROM `patient` WHERE `id`='$ido'";
		$query2 = mysqli_query($con,$sql2);
		while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
			echo "<td>P-".$row2['id']."</td>";
			echo "<td>".$row2['fname']." ".$row2['sname']."</td>";
			echo "<td>".$row2['sex']."</td>";
			echo "<td>".$row['date']." - ".$row['month']." - ".$row['year']."</td>";
			echo "<td>".$row['test_results']."</td>";
			echo "</tr>";
		}
		
	}
}

function addresult()
{
			$results = trim(htmlspecialchars($_POST['results']));
			$price = trim(htmlspecialchars($_POST['price']));
			$con=mysqli_connect("localhost","root","","hospital");
			if (!empty($results)) {
				$id = $_GET['id'];
				@require_once "connect.php";

				$sql = "UPDATE `medication` SET `status`='labdoctor',`test_results`='$results',`test_price`='$price' WHERE `id`='$id'";
				$query = mysqli_query($con,$sql);
				if (!empty($query)) {
					echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>Successfully Sent</b><br><br>";
				}
			}
}

function searchpatients()
{
	$con=mysqli_connect("localhost","root","","hospital");
			require 'connect.php';
			$fname = $_GET['s'];
			$typee = $_SESSION['type'];
			$sql = "SELECT * From `medication` WHERE `status`='laboratory'";
			$query = mysqli_query($con,$sql);
			while ($row = mysqli_fetch_array($query)) {
				$ido = $row['patient_id'];
				$sql2 = "SELECT * FROM `patient` WHERE `id`='$ido' AND `id` LIKE '%$fname%'";
				$query2 = mysqli_query($con,$sql2);
		while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
			echo "<td>P-".$row2['id']."</td>";
			echo "<td>".$row2['fname']."</td>";
			echo "<td>".$row2['sname']."</td>";
			echo "<td>".$row2['sex']."</td>";
			echo "<td><center><a href='test.php?id=".$row['id']."'>view</a></center></td>";
			echo "</tr>";
		}
		
	}
}


function settings()
{
	//$username = trim(htmlspecialchars($_POST['username']));
	$fname = trim(htmlspecialchars($_POST['fname']));
	$con=mysqli_connect("localhost","root","","hospital");
	$sname = trim(htmlspecialchars($_POST['sname']));
	$password2 = trim(htmlspecialchars($_POST['password2']));
	$password = trim(htmlspecialchars($_POST['password']));
	if ($password != $password) {
		echo "<br><b style='color:red;font-size:14px;font-family:Arial;'>Password Must Match</b>";
	}
	else{
		$pass = sha1($password);
		$name = $_SESSION['laboratory'];
		$type = $_SESSION['type'];
			
				$sql = "UPDATE `users` SET `fname`='$fname',`sname`='$sname',`password`='$pass' WHERE `username`='$name' AND `type`='$type'";
				$query = mysqli_query($con,$sql);
				if (!empty($query)) {
					echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>Successfully Updated</b>";

				}	
		}
	}

?>