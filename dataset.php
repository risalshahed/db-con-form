<?php
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'myDB';

	//Create Connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);		// V.V.I. LINE

	//Check connection
	if (!$conn) {		// V.V.I. LINE
		die('Connection Failed: ' . mysqli_connect_error());		// V.V.I. LINE
	}
	$result = mysqli_query($conn, "SELECT * FROM regForm");
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Dataset</title>
</head>
<style>
	table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			text-align: center;
	}
	td > a:hover {
		color: #AA0000;
	}
</style>
<body>
<?php
if(mysqli_num_rows($result) > 0) {
?>
<table>
	<tr>
		<th>ID</th>
		<th>StudentName</th>
		<th>Nationality</th>
		<th>PhoneNumber</th>
		<th colspan="2">Action</th>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_assoc($result)) {
	?>
		<tr>
			<td><?php echo $row["id"]; ?></td>
			<td><?php echo $row["StudentName"]; ?></td>
			<td><?php echo $row["Nationality"]; ?></td>
			<td><?php echo $row["PhoneNumber"]; ?></td>
			<td><a href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
			<td><a href="up.php?id=<?php echo $row["id"]; ?>">Update</a></td>
		</tr>
	<?php
	$i++;
	}
}
	?>
</table>
</body>
</html>