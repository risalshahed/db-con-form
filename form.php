<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="style-form.css">
</head>
<body>
	<h1>Student's Application Form</h1>
	<form action="" method="POST">
		Student Name <br>
		<input class="ab" type="text" name="StudentName" value="" placeholder="Enter Student Name" pattern="[A-Za-z]" required><br>
		Nationality <br>
		<input class="ab" type="text" name="Nationality" value="" placeholder="Enter Nationality" pattern="[A-Za-z]" required><br>
		Phone Number <br>
		<input class="ab" type="text" name="PhoneNumber" value="" placeholder="Enter Contact Number" pattern="[0-9]{4,}" required><br><br>
		<input type="submit" name="submit" value="Submit"><br><br>
		<button><a href="dataset.php" target="_blank">Check Form</a></button>
	</form>

<?php
	//Connect DB
	$conn = mysqli_connect("localhost", "root", "", "myDB");

	if(!$conn) {
		echo "<p>Connection Failed</p>";
	} else {
		if(isset($_POST["submit"])) {
			//Pass Varaible & Value (value is inside name)
			$StudentName = $_POST["StudentName"];
			$Nationality = $_POST["Nationality"];
			$PhoneNumber = $_POST["PhoneNumber"];
			$result = mysqli_query($conn, "INSERT INTO regForm(StudentName, Nationality, PhoneNumber) VALUES('$StudentName', '$Nationality', '$PhoneNumber')");
			//var_dump($result);
			if($result) {
				echo "<p>Data Added Successfully</p>";
			}
		}
	}
	
	
?>
<div>
	<h3 style="text-align: center;">
		<a href = 'dataset.php'>View Records</a>
	</h3>
</div>
</body>
</html>