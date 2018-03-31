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
	$Name = $_POST['studname'];
	$Taluka =$_POST['taluka'];
	$dob=$_POST['dob'];
	$Gender =$_POST['gender'];
	$schoolname= $_POST['schoolname'];
	$schoolid= $_POST['schoolid'];
	$attendence= $_POST['attendence'];
	$marks = $_POST['Marks'];
	$marks_img = $_POST['marks1'];
	$scholorship = $_POST['Scholarship'];
	$scholorship_img = $_POST['Scholarship1'];
	$olympiad =$_POST['olympiad'];
	$olympiad_img = $_POST ['olympiad_img'];
	$elementry =$_POST['Elementry'];
	$elementry_img = $_POST['Elementry_img'];
	$sports = $_POST['Sports'];
	


//$sql2 ="Create table Tal_".$Taluka." ( StudentName varchar(255), `Birth Date` varchar(255), Gender varchar(255), `School Name` varchar(255), `School Id` varchar(255) ,Attendence varchar(255), Marks varchar(255),  ,Scholorship varchar(255),   , olympiad varchar(255),   , Elementry varchar(255),   ,    ) ";



$sql ="INSERT INTO Tal_". $Taluka ." (StudentName,`Birth date`,Gender , `School Name` , `School Id` , Attendence , Marks , Marks_img , Scholorship , Scholorship_img , olympiad , olympiad_img , Elementry , Elementry_img  , Sports)
VALUES ( '$Name', '$dob', '$Gender', '$schoolname', 'schoolid', '$attendence', '$marks' , '$marks_img' , '$scholorship' , '$scholorship_img' , '$olympiad' , '$olympiad_img' , '$elementry' , '$elementry_img' , '$sports')";


if ($conn->query($sql) === TRUE) 
{
    
echo '<script language="javascript">';
echo 'alert("Registration Successful")';
echo '</script>';
} else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
header("Location: Sport.php");

//$conn->close();
?>