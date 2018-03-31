<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hackethon Taluka Page
</title>
<style>
table, th, td {
    border: 1px solid black;
}

 td, th {
    border: 1px solid #ddd;
    padding: 10px;
	font-size:14px;
	text-align:center;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
    padding-top: 12px;
	padding-left:80px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>

<body>
RMP Predictors
</body>
<center><h1>Student Information</h1>
<h2>Top 10 Students in $$$$$ Taluka</h2>
<?php
require 'userdb.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackethon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM students limit 0,10";
$result = $conn->query($sql);
$x = 0;
if ($result->num_rows > 0) {
	echo "";
    echo "<table><tr><th>ID</th><th>Student Name</th><th>School ID</th><th>Action</th></tr>";
    // output data of each row
	
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. " </td><td>" . $row["schid"]. "</td></tr>";
		}
	
    echo "</table>";
} else {
    echo "0 results";
}

echo "<h2>Next top 15 Students</h2>";

$sql = "SELECT * FROM students limit 10,15";
$result = $conn->query($sql);
$x = 0;
if ($result->num_rows > 0) {
	echo "";
    echo "<table><tr><th>ID</th><th>Student Name</th><th>School ID</th><th>Action</th></tr>";
    // output data of each row
	
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. " </td><td>" . $row["schid"]. "</td></tr>";
		}
	
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 
</center>
</html>
