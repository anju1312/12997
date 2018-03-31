<html>
<head><link rel="stylesheet" type="text/css" href="s.css">
<meta charset="utf-8">
<title>Academic</title>
<style>
@media (max-width: 400px) {
    .navbar a {
        float: none;
        width: 100%;
    }

}
.top {
    padding: 40px;
    text-align: center;
    background: #1abc9c;
	background-image: url(sam.jpg);
    color: white;
}
</style>
</head>
<body>

<div class="top">
 
  <h1>RMP PREDICTORS</h1>
  <p>Identification of meritorious students in primary education </p>
</div>


<div class="navbar">
  <a href="#">Home</a>
  <a href="#">About us</a>
  <a href="#">Contact us</a>  
 <a  class="right" onclick="document.getElementById('id01').style.display='block'">Log-Out</a>  
 
 
</div>


<div class="header">
		<h2>Fill Sports Details</h2>
	</div>
	
	<form method="post" action="data1.php">

		
		<center><label>Personal details</label></center>
		<div class="input-group">
			<label>Student Name:</label>
			<input type="text" name="studname" placeholder="Enter Student Name">
		</div>
		<div class="input-group">
			<label>Birth date:</label>
			<input type="date" name="dob"  placeholder="Enter DAte of Birth">
		</div>
		<div class="radio">
			<label>Gender:</label>
			Male:  <input type="radio" name="gender" value="male">
			Female:<input type="radio" name="gender" value="female">
		</div>
		<div class="input-group">
			<label>Taluka :</label>
			<input type="Text" name="taluka" placeholder="Enter Taluka ">
		</div>
		<div class="input-group">
			<label>School Name :</label>
			<input type="Text" name="schoolname" placeholder="Enter School Name ">
		</div>
		<div class="input-group">
			<label>School ID :</label>
			<input type="Text" name="schoolid" placeholder="Enter School ID ">
		</div>
		<hr><br>
		<center><label>Academic details</label></center>
		<div class="input-group">
			<label>Attendence:</label>
			<input type="Text" name="attendence" placeholder="Enter Attendence">
		</div>
		<div class="input-group">
			<label>Marks:</label>
			<input type="Text" name="Marks" placeholder="Enter Marks"> <br><br> <input type="file" class="btn" name="marks1">Attach Marksheet
			</div>
		<div class="input-group">
			<label>Sclorship:</label>
			<input type="Text" name="Scholarship" placeholder="Enter Scholarship"> <br><br> <input type="file" class="btn" name="Scholarship1">Attach Marksheet
		</div>
		<div class="input-group">
			<label>olympiad:</label>
			<input type="Text" name="olympiad" placeholder="Enter olympiad">  <br><br>  <input type="file" class="btn" name="olympiad_img">Attach Marksheet
		</div>
		<div class="input-group">
			<label>Elementry:</label>
			<input type="Text" name="Elementry" placeholder="Enter Elementry">  <br><br> <input type="file"class="btn" name="Elementry_img">Attach Marksheet
		</div><br>
		<hr><br>
		<center>Sports<br><br>
		<input type="file" class="btn" name="Sports">Attach Marksheet
		<br><br>
		<div class="regstud">
			<input type="submit" name="submit" value="Submit Information"></center>
		</div>
		<?php if(isset($error)){ echo $error; }?>
		
	</form>

       
        <br><br><br>	    
       
       	</div>


</body>
</html>