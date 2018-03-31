<html>
<head>
<meta charset="utf-8">
<title></title>
<style type="text/css">

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
form fieldset input[type="text"], input[type="password"], input[type="email"] {
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
 transition: box-shadow 0.3s ease-in-out;
}
form fieldset input[type="submit"]:hover
{
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
	
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
	background: linear-gradient( TO bottom,rgba(255,255,51,.9),rgba(255,102,0,.9));
	border-radius: 10px;
	color: #000;	
}
body {
	color: #FCEAEA;
	text-align: center;
	font-weight: 600;
	background-image: url(bri.jpg);
	background-size:cover;
	background-position: bottom;
}

body header {
	margin-left: 10px;
	margin-right: 10px;
	padding-top: 10px;
	border-radius: 10px;
	font-family: "Times New Roman", Times, serif;
	font-size: 24px;
	font-weight: bold;
	font-style: normal;
	color: #FFF;
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
.date{
	width: 150px;
	height: 30px;
	border-radius: 3px;
	font-size: 16px;
}

.date1{
	width: 15px;
	height: 15px;
	border-radius: 3px;
	
}


}

</style>
</head>
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
if (isset($_POST['submit1']))
{
   //$PName = $_POST['pname'];
	$School =$_POST['sname'];
	$School_id = $_POST['sid'];
	$Gender =$_POST['gender'];
	$Contact_Num =$_POST['num'];
    $Username   = $_POST['uname'];
    $Password  = $_POST['pd'];
	$Re_Password =$_POST['Rpd'];
	$Designation =$_POST['dig'];


$sql = "INSERT INTO registration (  Username, School, School_id, Gender, Password, Re_Password, Designation, Contact_Num) VALUES ( '$Username', '$School', '$School_id', '$Gender',  '$Password', '$Re_Password', '$Designation', '$Contact_Num')";
 
if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
	echo '<script language="javascript">';
echo 'alert("Check Your Registration:")';
echo '</script>';

}
}

//$conn->close();
?>

<body>
<header>
  <p><font size="8" font style="Copperplate Gothic">RMP PREDICTOR</font></p>
<strong></strong></header>

<p> <b><center></center></b></p>
<div id="login">
  
<form  method="post" action="index.php">
<fieldset>

  <p> <input type="text" placeholder="Username" size=30 name="uname" required></p>

  
 Gender :
  <font size="4">
  <input  name="gender" type="radio" class="date1" value="Male" required>Male
   <input  name="gender" type="radio" class="date1" value="Female" required>Female
	<input   name="gender" type="radio" class="date1" value="Other" required>Other
	
 


</p>


<p><input type="email" placeholder="Email Id" required></p>

<p><input type="text" placeholder="Contact no. :" maxlength=10 name="num" required ></p>
<p><input type="text"placeholder="School Name" name="sname" size=50 required></p>
  <p><input type="text"placeholder="School Id" name="sid" size=50 required></p>
  <p>
  Designation: </font>
   <select class="date" name="dig" required>
   <option>Principal</option>
   <option>Taluka Head</option>
   <option>District Head</option>
   </select>
   </p>
 




   <p><input type="Password"placeholder="Password" size=50 name="pd" id="ps" onKeyUp="check()" required></p>
   <p>
   <input type="Password"placeholder="Retype" size=50 name="Rpd" id="rps" onKeyUp="check()"required></p>
    <span id="confirmMessage" class="confirmMessage"></span>
   <script>
   function check()
{
   
    var pass1 = document.getElementById('ps');
    var pass2 = document.getElementById('rps');
   
    var message = document.getElementById('confirmMessage');
    
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    
    if(pass1.value == pass2.value){
        
        submit1.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        //message.innerHTML = "Passwords Match!"
		document.getElementById('submit1').disabled = false;
    }else{
        submit1.style.backgroundColor = badColor;
        message.style.color = badColor;
		document.getElementById('submit1').disabled = true;
        //message.innerHTML = "Passwords Do Not Match!"
    }
}  
</script>
	 
<p><input type="checkbox" class="date1" required>Accept <a href="fb.html">Terms And Condition</a></p> 	
<p><input type="submit" value="SUBMIT" name="submit1"  id="submit1" disabled ></p>
</fieldset>

  
	</form>
</div> <!-- end login -->
<footer> Academic year 2017-2018</footer>
</body>
</html>