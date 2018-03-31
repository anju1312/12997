<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackathon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['submit']))
{
	$Name = $_POST['name'];
	$Taluka =$_POST['fname'];
	$uname=$_POST['uname'];
	$Gender =$_POST['gender'];
	$District =$_POST['dname'];
	$Contact_Num =$_POST['contact'];
    $Password  = $_POST['password'];
	$DOB =$_POST['dob'];
	$email= $_POST['email'];

	
	

$sql ="INSERT INTO Registration (Name, Taluka, uname, Gender, Password, Designation, Contact_Num, Email)
VALUES ( '$Name', '$Taluka', '$uname', '$Gender', '$Password', 'Taluka Officer', '$Contact_Num', '$email')";



if ($conn->query($sql) == TRUE) 
{
    
echo '<script language="javascript">';
echo 'alert("Registration Successful")';
echo '</script>';
} else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$sql2 ="Create table Tal_".$Taluka." ( StudentName varchar(255), `Birth Date` varchar(255), Gender varchar(255), `School Name` varchar(255), `School Id` varchar(255) , Attendence varchar(255), Marks varchar(255), Marks_img varchar(255) ,Scholorship varchar(255), Scholorship_img varchar(255)  , olympiad varchar(255), olympiad_img varchar(255) , Elementry varchar(255), Elementry_img varchar(255)  , Quiz varchar(255) , Sports  varchar(255)  ) ";


if ($conn->query($sql2) == TRUE)
{
    
echo '<script language="javascript">';
echo 'alert("Registration Successful")';
echo '</script>';
} else 
{
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}


//$conn->close();
?>