<div class="left"><br>
	<center>
		<a href="index.php"><button class="btnlink">Home</button></a><br><br>
		<a href="patients.php"><button class="btnlink">Patients 
		<?php 
			@require "./../includes/connect.php";
			$typee = $_SESSION['type'];
			$con=
			$sql = "SELECT * From `medication` WHERE  `status`='laboratory'";
			$con=mysqli_connect("localhost","root","","hospital");
			$query = mysqli_query($con,$sql);
			echo "(".mysqli_num_rows($query).")";
		?>
		</button></a><br><br>
		
		<a href="results.php"><button class="btnlink">Results</button></a><br><br>
		<a href="settings.php"><button class="btnlink">Settings</button></a><br><br>
	</center>
				
</div>