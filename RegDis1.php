<!DOCTYPE html>
<html lang="en">

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
input[type=text], input[type=password]  {
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

.submit{
	width:200px;
	height:60px;
	border-radius:2px;
	border:none;
	text-align:center;
}

.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 1200px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}


</style>



<body>


<div class="header">
 
  <h1>RMP PREDICTORS</h1>
  <p>Identification of meritorious students in primary education </p>
</div>







<div class="navbar">
  <a href="homep.php">Home</a>
  <a href="#">About us</a>
  <a href="#">Contact us</a>  
 </div>
   
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
$sql2 ="Create table Dis_".$District." ( StudentName varchar(255), `Birth Date` varchar(255), Gender varchar(255), `School Name` varchar(255), `School Id` varchar(255) ,Attendence varchar(255), Marks varchar(255), Marks_img varchar(255) ,Scholorship varchar(255), Scholorship_img varchar(255)  , olympiad varchar(255), olympiad_img varchar(255) , Elementry varchar(255), Elementry_img varchar(255)  , Quiz varchar(255) , Sports  varchar(255)  ) ";

if ($conn->query($sql2) === TRUE) 
{
    echo '<script language="javascript">';
echo 'alert("Registration Successful")';
echo '</script>';
} else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}

//$conn->close();
?>

<div class="row">
  <div class="side">
      <h2>Latest News</h2>
      <h5>Educational News:</h5>
      <div class="nd1.jpg" style="height:200px;"><img src="nd1.jpg"height="300"></div><br><br><br><br><br>
     <p> <p>Grand Education Fair in june 14,15,16 organized by Gujarat Government</p></p>
      <h3>More news</h3>
   
      <div class="fakeimg" style="height:60px;">News</div><br>
      
  </div>
 
<div class="main">
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
  
  <p> <font size=4>User Name:</font><br>
  <input type="text" placeholder="uname" name="uname" size=30 required></p>
  
  <p> <font size=4>District Name:</font><br>
  <input type="text" placeholder="District Name" name="dname" size=30 required></p>
  
     <p> <font size=4>Password:</font><br>
  <input type="password" placeholder="Password" name="password" size=30 id="ps" onKeyUp="check()" required></p>

     <p> <font size=4>Retype Password:</font><br>
  <input type="password" placeholder="Retype Password" name="rpassword" id="rps" size=30 onKeyUp="check()" required></p>


<div class="popup" onclick="myFunction2()">Accept Terms and Conditions<input type="checkbox" id="myCheck"  onclick="myFunction()" required>

  <span class="popuptext" id="myPopup">PLEASE READ THESE TERMS AND CONDITIONS CAREFULLY! AND PAY ATTENTION TO PROVISIONS THAT RELATES TO USE OF INFORMATION, EXCLUDE OR LIMIT LIABILITY, DISCLAIMER AND TERMS OF GOVERNING LAW AND JURISDICTION.
BY COMPLETING THE REGISTRATION PROCESS AND CLICKING THE "I AGREE" BUTTON, YOU ARE INDICATING YOUR CONSENT TO BE BOUND BY THESE TERMS, THE SITE’S TERMS OF USE AGREEMENT, LISTING, CONTENT DISPLAY, USE POLICY AND PRIVACY POLICY WHICH ARE INCORPORATED HEREIN BY REFERENCE (COLLECTIVELY REFERRED TO AS THE "TERMS OF USE").
The Service will be offered free-of-charge for an unspecified time period unless terminated in accordance with these terms.
The Service will have the following core features (which may be added to or modified, or suspended for scheduled or unscheduled maintenance purposes, from time to time at the sole discretion of Administrator and notified to you)
a)
Enterprise / Entrepreneur Profile - allows them to post & edit profile of their enterprise or business or establishment / their application for financial assistance/Projections/ supporting documents/financial statements etc.
b)
Bankers Profile - to display and edit basic information about its business, financial and other related products and services offered, etc.
c)
Guarantee Corporations- to display and edit basic information about its business, and other related products and services offered, etc.
d)
Other Agency- to display and edit details of their services in the specified areas of expertise and fee charges, if any, therefore,
Definitions
 The features and services made available, including through website and any other  branded or co-branded websites (including sub-domains, international versions, widgets, and mobile versions); (b) our Platform; (c) devices, or networks now existing or later developed. It reserves the right to designate, in its sole discretion, that certain of our other services are governed by separate terms.
"Platform" means a set of APIs and services (such as content) that enable others Participants, including application developers and website operators, to retrieve data.
"Information" means facts, figures, data, statement, assertions, suggestions, documents, and other contents whatsoever provided by the User/Participants, including actions taken by users and non-users who interact through the Portal.
"Content" we mean anything you or other users post, provide or share using the Portal Services.
"Data" or "user data" or "user's data" means any data, including a user's content or information that we or third parties can retrieve from the Portal.
"Post" means post on or otherwise make available the contents by using the Portal.
“Members/Participants” means persons accessing the website and shall include its registered members and participants.
"Use" means use, copy, display, distribute, transmit, modify, translate, and create other applications use of the contents.
1.ACCEPTANCE
These are the terms and conditions governing your use of the Portal. By accessing portal you acknowledge, accept and agree to the following terms including the Privacy Terms. You also acknowledge and agree that the terms and conditions may be amended / modified at any time by the portal. By continuing to use the services on the portal, you agree that the amended/modified terms will also apply to you.
2.ELIGIBILITY TO USE
Use of the Portal is available only to persons who have attained the age of majority and can form legally binding contracts as per the applicable laws of Republic of India.
It reserves the right to terminate your registration and / or refuse to provide you with access to the Portal if it is discovered that you have not attained majority as per the applicable laws.
However, if you access, either by registration on the Portal or by any other means, not as an individual but on behalf of a legal entity, you represent that you are fully authorized to do so and the listing, posting or information placed on the Portal on behalf of the legal entity is your responsibility and you agree to be accountable for the same to other users of the Portal.
You must not access the Portal or accept these Terms if you are a person who is either barred or otherwise legally prohibited from providing or receiving or using the Service or setting up any business entity within India or carrying out any commercial or other activities in India under the laws of India or of the country in which you are resident or from which you access or use the Portal.

</span>
</div>

<p id="text" style="display:none">Terms and Conditions Accepted!</p>

 
  <script>
   function check()
{
   
    var password = document.getElementById('ps');
    var rpassword = document.getElementById('rps');
   
    var message = document.getElementById('confirmMessage');
    
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    
    if(password.value == rpassword.value){
        
        submit.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        //message.innerHTML = "Passwords Match!"
		document.getElementById('submit').disabled = false;
    }else{
        submit.style.backgroundColor = badColor;
        message.style.color = badColor;
		document.getElementById('submit').disabled = true;
        //message.innerHTML = "Passwords Do Not Match!"
    }
}  
</script>
<p><center><input type="submit" name="submit"value="Submit" id="submit" class="submit"></center></p>
</fieldset>

  
	</form>
</div> 
  </div>   

<div class="footer">
  <h2>Educational Department,Government of Gujarat</h2>
</div>
<script>
// When the user clicks on div, open the popup
function myFunction2() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>

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
