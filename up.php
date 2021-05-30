<!DOCTYPE html>
<html>
<head>
	<title>Edited Form</title>
</head>
<style>
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
		text-align: center;
	}
	.ab {
		width: 70%;
		height: 25px;
		border-radius: 2px;
	}
	input {
	padding: 5px;
	border-radius: 5px;
	}
</style>
<body>
	<?php $id = $_GET["id"]; ?>
		<form action="" method="POST">
			<input type="hidden" name="id" value="<?php echo $id ?>"><br>
			Student Name <br>
			<input class="ab" type="text" name="StudentName" value="" placeholder="Enter Student Name" pattern="[A-Za-z]" required><br>
			Nationality <br>
			<input class="ab" type="text" name="Nationality" value="" placeholder="Enter Nationality" pattern="[A-Za-z]" required><br>
			Phone Number <br>
			<input class="ab" type="text" name="PhoneNumber" value="" placeholder="Enter Contact Number" pattern="[0-9]{4,}" required> <br><br>
			<input type="submit" name="edit" value="Update"><br><br>
		</form>
<?php
	$conn = mysqli_connect("localhost", "root", "", "myDB");
	if(!$conn) {
		echo "<p>Connection Failed</p>";
	} else {
		if(isset($_POST["edit"])) {
			//Connect DB
			//Pass Varaible & Value (value is inside name)
			$id = $_POST["id"];
			$StudentName = $_POST["StudentName"];
			$Nationality = $_POST["Nationality"];
			$PhoneNumber = $_POST["PhoneNumber"];
			//Update Data
			$result = mysqli_query($conn, "UPDATE regForm SET StudentName = '$StudentName', Nationality = '$Nationality', PhoneNumber = '$PhoneNumber' WHERE id = '$id'");
			//var_dump($result);
			if($result) {
				echo "<p>Data Updated Successfully</p>";
			}
		}
	}
		
	
	
/*	mysqli_query($conn, "UPDATE regForm SET StudentName = '$StudentName', Nationality = '$Nationality', PhoneNumber = '$PhoneNumber' WHERE id = '$id'");
	echo "<p>Data Edited Successfully</p>";*/
?>
<div>
	<h3 style="text-align: center;">
		<a href = 'dataset.php'>View Records</a>
	</h3>
</div>
</body>
</html>