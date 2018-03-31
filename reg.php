<html>
<head>
<meta charset="utf-8">
<title>princeR</title>
<style type="text/css">
body {
	background-color: #FFFFFF;
	color: #5a5656;
	line-height: 1.5em;
	background-image: url(land.jpg);
}
a { text-decoration: none; }
h1 {
	font-size: 1em;
}
h1, p {
margin-bottom: 10px;
}
strong {
font-weight: bold;
}
.uppercase { text-transform: uppercase; }

/* ---------- LOGIN ---------- */
#login {
margin: 50px auto;
width: 300px;
}
form fieldset input[type="text"], input[type="password"] {
	background-color: #FFF;
	opacity: 1;
	border: none;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	color: #5a5656;
	font-family: 'Open Sans', Arial, Helvetica, sans-serif,;
	font-size: 16px;
	height: 50px;
	outline: none;
	padding: 0px 10px;
	width: 280px;
	-webkit-appearance: none;
	font-weight: bold;
	
}
form fieldset input[type="submit"] {
background-color: #008dde;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 300px;
-webkit-appearance:none;
}




body header {
	background-color:rgba(0,0,0,.8);
	height: 100px;
	text-align: center;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-style: italic;

	font-size: xx-large;
}
#login form fieldset {
	background-color: rgba(102,0,102,.7);
	border-radius: 10px;
	color: #000;	
}
body {
	color: #FCEAEA ;
	text-align: center;
	font-weight: 600;
	background-image: url(land.jpg);
	background-position: bottom;
}

body header {
	margin-left: 10px;
	margin-right: 10px;
	padding-top: 10px;
	border-radius: 10px;
}

footer{
	background-color: #000000;
	height: 30px;
	text-align: right;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-style: italic;
	font-weight: 600;
	font-size: large;
	margin-left: 10px;
	margin-right: 10px;
	padding-top: 10px;
	border-radius: 20px;
	opacity: 0.8;
	background-clip: border-box;
	padding-right: 10px;
	alignment-adjust: after-edge;
	background-position-x: 100;
}

}

</style>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackathon";

if (isset($_POST['submit']))
{
	$PName = $_POST['pname'];
	$School =$_POST['sname'];
	$School_id = $_POST['sid'];
	$Gender =$_POST['gender'];
	$Contact_Num =$_POST['num'];
    $Username   = $_POST['uname'];
    $Password  = $_POST['pd'];
	$Re_Password =$_POST['Rpd'];
	$Designation =$_POST['']

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql ="INSERT INTO Registration (PName, School, School_id, Gender, Username, Password, Re_Password, Designation, Contact_Num)
VALUES ( '$PName', '$School', '$School_id', '$Gender', '$Username', '$Password', '$Re_Password', '$Designation', '$Contact_Num')";
$result = mysql_query($conn, $sql);

if (mysql_num_rows($result) > 0) {   				// code for the alert of connection
   //echo "New record created successfully";
   header("Location: staff form.php");
   
   
} else {
   // echo "Error: " . $sql . "<br>" . $conn->error;
   echo '<script language="javascript">';
echo 'alert("Incorrect Username or Password")';
echo '</script>';

}
}

//$conn->close();
?>

</head>
<body>
<header>
  <p><font size="8" font style="Copperplate Gothic">RMP PRADEATOR</font></p>
<strong></strong></header>

<p> <b><center></center></b></p>
<div id="login">
  
<form action="javascript:void(0);" method="post">
<fieldset>

  <p> <input type="text" placeholder="Principal Name" size=30 name="pname"></p>


   
<p>Birth date :
   <input type="date" size=50></p>
<p>
  
 Gender :
  
  <input type="radio"  name="gender" value="Male">Male
   <input type="radio"  name="gender" value="Female">Female
	<input type="radio"   name="gender" value="Other">Other
	
 


</p>


<p><input type="text" placeholder="Email Id"></p>

<p><input type="text" placeholder="Contact no. :" maxlength=10 name="num" ></p>
<p><input type="text"placeholder="School Name" name="sname" size=50></p>
  <p><input type="text"placeholder="School Id" name="sid" size=50></p>
   
  <p>
 Board: 
<input type="radio"  name="Board">State Board
<input type="radio"  name="Board">CBSC Board




   <p><input type="Password"placeholder="Password" size=50 name="pd"></p>
   <p>
   <input type="Password"placeholder="Retype" size=50 name="Rpd"></p>
	 
	
<p><input type="submit" value="Login" name="submit"></p>
</fieldset>

  
	</form>
</div> <!-- end login -->
<footer> Academic year 2017-2018</footer>
</body>
</html>