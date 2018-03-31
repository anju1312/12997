<html>
<body>

<style>



.header {
    padding: 40px;
    text-align: center;
    background: #1abc9c;
	background-image: url(sam.jpg);
    color: white;
}

/* Increase the font size of the heading */
.header h1 {
    font-size: 30px;
}




button{
background-color: #008dde;
border: none;
border-radius: 100px;
-moz-border-radius: 100px;
-webkit-border-radius: 100px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 100px;
-webkit-appearance:none;
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
width: 270px;
}
form fieldset input[type="text"], input[type="password"], input[type="number"], input[type="date"], input[type="email"]{
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
border-radius: 0px;
-moz-border-radius: 0px;
-webkit-border-radius: 0px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 300px;
-webkit-appearance:none;
}


.radio{
height:20px;
width:20px;
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
	background-color: rgba(204,204,255,.4);
	border-radius: 0px;
	color: #000;	
}
body {
	color: #FCEAEA ;
	text-align: left;
	font-weight: 600;
	background-image: url("bg11.jpg");
	background-size: cover;
	background-position: bottom;
}


}












</style>


	<div class="header">
 
  <h1>RMP PREDICTORS</h1>
  <p>Identification of meritorious students in primary education </p>
</div>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackathon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
	{
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['submit']))
{
	$Name = $_POST['name'];
	$District =$_POST['dname'];
	$uname=$_POST['uname'];
	$Gender =$_POST['gender'];
	$Contact_Num =$_POST['contact'];
    $Password  = $_POST['password'];
	$DOB =$_POST['dob'];
	$email= $_POST['email'];
	
$sql ="INSERT INTO Registration (Name, District, uname, Gender, Password, Designation, Contact_Num, Email)
VALUES ( '$Name', '$District', '$uname', '$Gender', '$Password', 'District Officer', '$Contact_Num', '$email')";

//$sql1 ="INSERT INTO state (Name, District, uname, Gender, Password, Designation, Contact_Num, Email)
//VALUES ( '$Name', '$District', '$uname', '$Gender', '$Password', 'District Officer', '$Contact_Num', '$email')";




if ($conn->query($sql) === TRUE) 
{
    echo '<script language="javascript">';
echo 'alert("Registration Successful")';
echo '</script>';
} else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql2 ="Create table Dis_".$District." ( StudentName varchar(255), `Birth Date` varchar(255), Gender varchar(255), `School Name` varchar(255), `School Id` varchar(255) ,Attendence varchar(255), Marks varchar(255), Marks_img varchar (255) ,Scholorship varchar(255), Scholorship_img varchar (255)  , olympiad varchar(255), olympiad_img varchar (255) , Elementry varchar(255), Elementry_img varchar (255)  , Quiz varchar (255) , Sports  varchar (255)  ) ";

if ($conn->query($sql2) === TRUE) 
{
    echo '<script language="javascript">';
echo 'alert("district table created Successful")';
echo '</script>';
} else 
{
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
}



//$conn->close();
?>
<div id="login">
  
<form  method="post">
<fieldset>


  <p> <font size=5>Sign-Up For District Officer</font><br>

  <p> <font size=4>Name:</font><br>
  <input type="text" placeholder="Name" size=30 name="name" required></p>
  
   <p> <font size=4> Email:</font><br>
  <input type="email" placeholder="Email" size=30 name="email"required></p>


   <p>
<font size=4>Gender:</font><br>
 
  
  <input type="radio"  name="gender" value="Male" class="radio"required><font size=4> Male
   <input type="radio"  name="gender" value="Female"class="radio"required><font size=4>Female
	</p>
	
 <p><font size=4>Date of Birth:</font><br> 
   <input type="date" name="dob" size=50 required></p>
   
   <p> <font size=4> Contact no:</font><br>
  <input type="text" placeholder="Contact no " name="contact"size=30 maxlength=10 required></p>
  
   <p> <font size=4>District Name:</font><br>
  <input type="text" placeholder="District Name" name="dname"size=30 required></p>
  
  <p> <font size=4>User Name:</font><br>
  <input type="text" placeholder="uname" name="uname" size=30 required></p>
  
     <p> <font size=4>Password:</font><br>
  <input type="password" placeholder="Password" name="password" size=30 required></p>

     <p> <font size=4>Retype Password:</font><br>
  <input type="password" placeholder="Retype Password" name="rpassword" size=30 required></p>



Accept Terms and Conditions<input type="checkbox" id="myCheck"  onclick="myFunction()" required>

<p id="text" style="display:none">Terms and Conditions Accepted!</p>

 
 
<p><input type="submit" name="submit"value="Submit"></p>
</fieldset>

  
	</form>
</div> <!-- end login -->
<script>
function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("text");
    if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }
}
</script>

</body>
</html>