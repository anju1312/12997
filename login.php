<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackathon";

if (isset($_POST['submit']))
{
    $Username   = $_POST['uname'];
    $Password  = $_POST['pd'];
	
// Create connection-
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$h = "SELECT Designation FROM registration where uname= '$Username'";
$result1 = mysqli_query($conn,$h);
if (mysqli_num_rows($result1)== TRUE)
{
$sql = "SELECT uname,Password,Designation FROM registration where uname='$Username' and Password='$Password'";

$result = mysqli_query($conn,$sql);

// Set session variables
$_SESSION["uname"] = "$Username";

echo 'Incorrect Username or Password';
if (mysqli_num_rows($result)==1)
{   				// code for the alert of connection
   //echo "New record created successfully";
   if($row = $result->fetch_assoc()) 
   {
        if($row["Designation"]=="Principal")
		{
			header("Location: Prihome.php");
		}
		else if($row["Designation"]=="Taluka Officer")
		{
			header("Location: talhome.php");
		}
		else if($row["Designation"]=="District Officer")
		{
			header("Location: dishome.php");
		}
		
		else 
		{
			echo 'alert("Incorrect Username or Password")';
		}
   } 
 
}
}
//$conn->close();
}
?>