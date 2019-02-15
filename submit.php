<html>
<h1> These are the results </h1>
</html>

<?php
$x=$_POST['firstname'];
$y=$_POST['lastname'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="db1tester";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
	die("connection failed:" . $conn->connect_error);
}
echo "Connected Successfully";

$sql = "INSERT INTO `user` (`fname`, `lname`)  VALUES('$x', '$y')";  

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" , $conn->error;
}

$sql = "SELECT id, fname, lname FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table>";
		while($row = $result->fetch_assoc()) {
			echo "<tr><td> id: " . $row["id"]. " </td><td> Name: " . $row["fname"]. " " . $row["lname"]. "</td></tr>";
		}
echo "</table>";	
} else {
	echo "0 results";
}



$conn->close();
?>

