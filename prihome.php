<?php
session_start();
?>
<head>
<title>Government of Gujarat</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

/* Style the body */
body {
    font-family: Arial;
    margin: 0;
}

/* Header/logo Title */
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

/* Style the top navigation bar */
.navbar {
    overflow: hidden;
    background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
    float: right;
	cursor: pointer;
}

/* Change color on hover */
.navbar a:hover {
    background-color: #ddd;
    color: black;
}

/* Column container */
.row {  
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
    -ms-flex: 30%; /* IE10 */
    flex: 30%;
    background-color: #f1f1f1;
    padding: 20px;
}

/* Main column */
.main {   
    -ms-flex: 70%; /* IE10 */
    flex: 70%;
    background-color: white;
    padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 700px) {
    .row {   
        flex-direction: column;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media (max-width: 400px) {
    .navbar a {
        float: none;
        width: 100%;
    }

}
/*---------------login--------------------*/

body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}



/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}


/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #eee;
    margin: 10px auto; /* 15% from the top and centered */
    border: 1px solid #888;
    width:450px; /* Could be more or less, depending on screen size */
	height: auto;
}
.model-content input[ type="text"] 
{
	width:180px;
	height:40px;
	font-size:50px;
}
/* The Close Button */
.close {
    /* Position it in the top right corner outside of the modal */
    position: absolute;
    right: 25px;
    top: 0; 
    color: #000;
    font-size: 35px;
    font-weight: bold;
}



/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}


/*---------------imgslider--------+-+-+----*/
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 3s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3s;
  animation-name: fade;
  animation-duration: 3s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


/*---------------dropdown-------------*/
.navbar a.down
{
    float: bottom;
	cursor: pointer;
}
.dropbtn {
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}
.dropbtn a
{
	float: ;
}
.dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
	float:down;
    position: relative;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd}

.show {display:block;}



.sion{
	text-align:Right;
	color: #000000;
	font-size:18px;
}


</style>
</head>
<body>

<div class="header">
 
  <h1>RMP PREDICTORS</h1>
  <p>Identification of meritorious students in primary education </p>
</div>







<div class="navbar">
  <a href="#">Home</a>
  <a href="#">About us</a>
  <a href="#">Contact us</a>  
  <a href="logout.php"class="right">Log-Out</a>   
 
   
 
 <a onclick="myFunction()" class="dropbtn" href="fillsd.php">Fill-Details</a>
  <div id="myDropdown" class="dropdown-content">
    </div>

	
	
</div>

   
   
   
  
  <!-- Button to open the modal login form -->

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      
    </div>

    <div class="container">
	<center><img src="nd5.png" alt="Avatar" class="avatar"></center>
	  <br><center><b>Login</b></center><br><br>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required><br>

      <button type="submit">Login</button><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
	  
    </div>

  </form>
</div>
  
</div>




<div class="sion">
	<?php


$user = $_SESSION["uname"]; 
if (isset($_SESSION['uname'])) 
{
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

   $sql = "SELECT Name FROM registration where uname = '$user'";
   $result = mysqli_query($conn, $sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<b>"."Welcome: " . $row["Name"]."</font>";
    }
} else {
    echo "0 results";
}
}
	
	
	
	
	
	?>
	</div>

<div class="row">
  <div class="side">
      <h2>Latest news and Update</h2>
      <h5>Educational News:</h5>
      <div class="nd1.jpg" style="height:200px;"><img src="nd1.jpg"height="300"></div><br><br><br><br><br>
     <p> <p>Grand Education Fair in june 14,15,16 organized by Gujarat Government</p></p>
      <h3>More news</h3>
   
      <div class="fakeimg" style="height:60px;">News</div><br>
      
  </div>
  <div class="main">
      <h2>Government of Gujarat</h2>
      <h5>Educational Department,Government of Gujarat</h5>
      <div class="" style="height:10px;"></div>
	  
	  
	  <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="nd2.jpg" style="width:100%">
  <div class="text"> </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="nd3.jpg" style="width:100%">
  <div class="text"> </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="nd4.jpg" style="width:100%">
  <div class="text"> </div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
      
	  
	  <p>Educational Department</p>
      <p> This web-sit for primary Educational Department and use for Identification of meritorious students in primary education </p>
      <br>
     

<div class="footer">
  <h2>Educational Department,Government of Gujarat</h2>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<script>

// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


</body>
</html>
