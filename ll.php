<html>



<meta charset="utf-8">
<title>Login</title>
<style type="text/css">
body {
background-color: #C0C0C0;
color: #5a5656;
line-height: 1.5em;
}
a { text-decoration: none; }
h1 { font-size: 1em; }
h1, p {
margin-bottom: 10px;
}
strong {
font-weight: bold;
}
body header {
	font-weight: bold;
}
.uppercase { text-transform: uppercase; }

/* ---------- LOGIN ---------- */
#login {
margin: 50px auto;
width: 300px;
}
form fieldset input[type="text"], input[type="password"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 280px;
-webkit-appearance:none;
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
form fieldset input[type="submit"]:hover
{
	background:#00F;
	}
form fieldset a {
color: #5a5656;
font-size: 18px;
}
form fieldset a:hover { text-decoration: underline; }
.btn-round {
background-color: #5a5656;
border-radius: 50%;
-moz-border-radius: 50%;
-webkit-border-radius: 50%;
color: #f4f4f4;
display: block;
font-size:18px;
height: 50px;
line-height: 50px;
margin: 30px 125px;
text-align: center;
text-transform: uppercase;
width: 50px;
}



body header {
	background-color:rgba(0,0,0,.8);
	height: 100px;
	text-align: center;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-style: italic;
	font-weight: 500;
	font-size: xx-large;
	margin-left: 10px;
	margin-right: 10px;
	padding-top: 15px;
	border-radius: 10px;
}
body footer {
	background-color: #000000;
	height: 30px;
	text-align: right;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-style: italic;
	font-weight: 500;
	font-size: large;
	margin-left: 10px;
	margin-right: 10px;
	padding-top: 10px;
	padding-right: 10px;
	border-radius: 10px;
	align: border-bottom;
	opacity:0.8;
		color:#FFFFFF;

}
#login form fieldset {
	background-color: rgba(0,0,0,.7);
	
		border-radius: 10px;
	
}
body {
	background-image: url(college.jpg);
	background-size: cover;
	
	color: #FCEAEA;
	text-align: center;
	font-weight: 600;
}



</style>
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
	

$_SESSION["uname1"] = "$Username";


// Create connection-
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$h = "SELECT Designation FROM registration where Username= '$Username'";
$result1 = mysqli_query($conn,$h);
if (mysqli_num_rows($result1)== TRUE)
{
$sql = "SELECT Username,Password,Designation FROM reg where Username='$Username' and Password='$Password'";

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)==1) {   				// code for the alert of connection
   //echo "New record created successfully";
   if($row = $result->fetch_assoc()) {
        if($row["Designation"]=="hod")
   header("Location: HOD form.php");
else if($row["Designation"]=="staff")
	header("Location: staff form.php");
else if($row["Designation"]=="Admin")
	header("Location: abcd/adminpage.php");
else if($row["Designation"]=="principal")
	header("Location: prin_form.php");


   
   } 
} else {
   // echo "Error: " . $sql . "<br>" . $conn->error;
   echo '<script language="javascript">';
echo 'alert("Incorrect Username or Password")';
echo '</script>';

}
}
//$conn->close();
}
?>
<body>




<header>
  <p>&nbsp;Rajendra Mane Polytechnic,Ambav</p>
<strong></strong></header>

<p> <b><center></center></b></p>
<div id="login">
 
<form method="post" action="index.php">
<fieldset>
 <h1><font size= "+3" color="red"><strong>Welcome</strong><br> Please login.</font></h1>
 <br>
<p><input type="text" placeholder="Username" name="uname" ></p>
<p><input type="password"  placeholder="Password" name="pd" ></p>

<p><input type="submit" value="Login" name="submit" ></p>
</fieldset>
</form>
</div> <!-- end login -->
<br>
<br>
<br>
<br>

<footer> Academic year 2017-2018</footer>
</body>
</html>