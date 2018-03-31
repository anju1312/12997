<?php
$con=mysqli_connect("localhost","root","","hackathon");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_GET['id'])) {
   @mysql_query("DELETE FROM tal_chiplun WHERE id = '".$_GET['id']."'");
   header("location: taluka.php");
   exit();
}
?>