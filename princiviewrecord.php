<html>
<head>
</head>
<style>
.page
			{
				background-color:#eee;
			}
            table, th, td 
			{
				border: 1px solid black;
			}

			td, th
			{
				border: 1px solid #ddd;
				padding: 10px;
				font-size:20px;
				text-align:center;
			}

			tr:nth-child(even){background-color: #f2f2f2;}

			tr:hover {background-color: #ddd;}

th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
	.struct{
		font-size:28px;
		text-align:center;
}

</style>
<body>
<div class="struct">
<?php
session_start();

$con=mysqli_connect("localhost","root","","hackathon");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (isset($_SESSION['uname'])) 
{
	$user=$_SESSION['uname'];
	
	 $sql = "SELECT School,Taluka FROM registration where uname = '$user'";
   $result = mysqli_query($con, $sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "<b>"."Welcome: " . $row["Taluka"]."</font>";
		$s= $row["School"];
		$t= $row["Taluka"];
		echo " Students From  "."$t";
		echo " of  School "."$s";
		
		
		$result1 = mysqli_query($con,"SELECT * FROM tal_".$t." WHERE `School Name` ='$s' ");
echo "<center>"."<br>";
echo "<table border=3 >";
echo"<tr>";
echo"<th>Student Name</th>";
echo"<th>School id</th>";
echo"<th>School Name</th>";
echo"<th>Marks</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result1))
{
echo "<tr>";
echo "<td>" . $row[0] . "</td>";
echo "<td>" . $row[4] . "</td>";
echo "<td>" . $row[3] . "</td>";
echo "<td>" . $row[6] . "</td>";
echo "</tr>";
}
echo "</table>";
echo "</center>";
    }
} else {	
    echo "0 results";
}
}
	
mysqli_close($con);

?>
</div>
</body>
</html>