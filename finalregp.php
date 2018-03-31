<html>

<head><link rel="stylesheet" type="text/css" href="s.css">
<style>



.main {
    padding: 40px;
    text-align: center;
    background: #1abc9c;
	background-image: url(sam.jpg);
    color: white;
}
footer {
     padding: 2em;
    clear: left;
    color:white;
    text-align: center;
background-color:black;
  border-radius:10px;
  font-size:20;
}


/* Popup container - can be anything you want */
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
    width: 500px;
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

</head>
<body>
<div class="main">
 
  <h1>RMP PREDICTORS</h1>
  <p>Identification of meritorious students in primary education </p>
</div>

<div class="header">
		<h2>Register</h2>
	</div>
	
<form method="post" action="register.php">

		

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="Email" value="">
		</div>
		
		</div>
		<div class="input-group">
			<label>Date of Birth</label>
			<input type="date" name="Date of Birth" value="">
		</div>
		

		</div>
		<div class="input-group">
			<label>Contact no.</label>
			<input type="Number" name="Contact no" value="">
		</div>
		
		
		</div>
		<div class="input-group">
			<label>School Name</label>
			<input type="text" name="School Name" value="">
		</div>
		
		</div>
		<div class="input-group">
			<label>School-Id</label>
			<input type="text" name="School-Id" value="">
		</div>
		
		</div>
		<div class="input-group">
			<label>Date of Birth</label>
			<input type="date" name="Date of Birth" value="">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2"><br><br>
		

<div class="popup" onclick="myFunction()">Terms and conditions
  <span class="popuptext" id="myPopup"><p><font size=5>Terms and conditions:<br><br></font>
<font size=3>1.YOUR REGISTRATION OBLIGATIONS <br></font>
<font size=2>1.1)Provide true, accurate, current and complete information about yourself as prompted by the
 Service's registration form (such information being the "Registration Data")<br>
1.2)Maintain and promptly update the Registration Data to keep it true, accurate, current and complete.
 If you provide any information that is untrue, inaccurate, not current or incomplete, or software has
 reasonable grounds to suspect that such information is untrue, inaccurate, not current or incomplete,
 software has the right to suspend or terminate your account and refuse any and all current or future 
 use of the Service (or any portion thereof) without any liability to you. We are concerned about the 
 safety and privacy of all our users, particularly children. </font><br>
<font size=3>2.MEMBER ACCOUNT, PASSWORD AND SECURITY </font><br>
<font size=2>2.1)You will receive a password and account designation upon completing the Service's 
registration process. You are responsible for maintaining the confidentiality of the password and 
account, and are fully responsible for all activities that occur under your password or account. <br>
2.2)No Right of Survivorship and Non-Transferability. You agree that your login account is 
non-transferable and any rights to your user ID or contents within your account terminate upon
 your death. Upon receipt of a copy of a death certificate, your account may be terminated and all 
 contents therein permanently deleted.</font><br>
<font size=3>3.OBLIGATIONS FOR CANDIDATE ENROLLMENT</font><br>
<font size=2>3.1)Principal/ Head master  of the school is responsible for verifying the students registrations from their schools will be single point of contact for all communication addressed to their schools.
3.2)Valid information should be filled of the candidates.<br>
3.3)Student information and scanned copy of the documents Should be uploaded while filling the form.<br>
3.4)If any wrong information is to be filled principal will be held responsible<br></font> 
</p></span>
</div>

<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<br>
<input type="checkbox" id="myCheck"  onclick="myFunction()">
<p id="text" style="display:none">Terms and Conditions Accepted!</p>


		
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		


</div>
</form>
</body>
<footer> GOVERNMENT OF GUJARAT</footer>
</html>