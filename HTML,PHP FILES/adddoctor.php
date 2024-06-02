<!DOCTYPE html>


<html>
<head><title>Add Doctor</title>
<style>

h1
{
z-index:100;
position:absolute;


width:1200px;
font-family:alGerian;
margin-bottom:0px;padding 0px;
font-size:32px;
line-height:30px;
text-align:center;
color:ORANGE;


}

div
{
          

margin-top:30px;
padding:20px;
background-repeat:no-repeat;
margin-right:400px;
margin-left:0px;

}

.div2
{
	width:1310px;
	height:auto;
	z-index:-1; position: absolute;
	margin-bottom:-8px;
	margin-top:-8px;
	margin-left:-10px;
	background-image:url(image13.jpg);width:100%px;
	
}
    

input[type=submit]
{
margin:20px;
margin-left:150px;
width:200px;
height:35px;
color:orange;
background-color:black;
font-size:23px;
border-radius:15px;
cursor: pointer;


}
input[type=text],input[type=number],input[type=Email]
{
border-radius:5px;
background-color:BLACK;
padding:8px;10;
MARGIN:5PX;
COLOR:ORANGE;
width:240px;


}

label
{
width:300px;
display:inline-block;
FONT-SIZE:20PX;
color:black;
}
select
{
padding:6px;
border-radius:5px;
background-color:BLACK;
margin:5.5px;
width:256px;
background-color:black;
color:ORANGE;
}


input[type="date"]::-webkit-calendar-picker-indicator {
    background-color: orange;
    opacity:20;
    display: block;
    cursor:pointer;
    width: 20px;
	MARGIN-LEFT:10PX;
	MARGIN-RIGHT:10PX;
	color:orange;
    height: 20px;
    border-width: thin;
	   filter: invert(0);
}

input[type="date"]
{
	background-color:black;
	color:orange;
	width:256px;
	
	height:40px;
	MARGIN:5PX;


background-color:BLACK;
}
label
{
width:300px;
display:inline-block;
FONT-SIZE:20PX;
color:black;
}
 .fullscreen-bg__video {
  

 position:fixed; 
                 
  z-index: -1;  
        margin-left:565px;      
   width:90%;
   height:100%; 
   margin-top:-20px;

}       
blink {
  -webkit-animation: 1s linear infinite condemned_blink_effect; 
  animation: 0.5s linear infinite condemned_blink_effect;
}




@keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}
 
    
</style>
</head>
<body>
<div class="div2">
    <video loop muted autoplay class="fullscreen-bg__video" >
        <source src="video5.webm" type="video/webm">
        <source src="video5.mp4" type="video/mp4">
        <source src="video5.ogv" type="video/ogg">
    </video>

<h1><blink><marquee behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();"><b>WELCOME TO ADD THE DOCTOR:</b></marquee></blink></h1>


<div class="div">

<form method="POST">
<p style="margin-left:50px">
<label for ="fname"><b>First Name</b></label>
<input type="text" id="fname" name="fname" placeholder="Enter your name here" required><br>


<label for="lname"><b>Last Name</b></label>
<input type="text" id="lname" name="lname" placeholder="Enter Sir name here" required><br>
<label for="Contact"><b>Contact Number </b></label>
<input type="TEXT" id="Contact" name="Contact" MAXLENGTH="10" onkeypress="return onlyNumberKey(event)" placeholder="Enter your Mobile Number" required><br>
<label for="Age"><b>Age </b></label>
<input type="TEXT" id="Age" name="Age" MAXLENGTH="10" onkeypress="return onlyNumberKey(event)" placeholder="Enter the Age" required><br>
<label for ="Address"><b>Address</b></label>
<input type="text" id="address" name="address" placeholder="Enter your Address" required><br>
<label for ="Email"><b>Email</b></label>
<input type="Email" id="Email" name="Email" placeholder="Enter your Email" required><br>


 
<label for="CASTE"><b>Select Your Caste</b></label>
<select name="caste" required>
<option value="GENERAL">GENERAL</option>
<option value="SC">SC</option>
<option value="ST">ST</option>
</select><br>

<label for="gender"><b>Select Your gender</b></label>
<select name="gender" required>
<option value="MALE">MALE</option>
<option value="FEMALE">FEMALE</option>
<option value="Other">OTHER</option>
</select>
<br>
<label for ="Qualification"><b>Doctor Qualification</b></label>
<input type="text" id="Qualification" name="Qualification" placeholder="Enter the qualification" required><br>

<label for ="Experience"><b>Work Experience</b></label>
<input type="TEXT" id="Experience" name="Experience" MAXLENGTH="10" onkeypress="return onlyNumberKey(event)" placeholder="Enter experience in year" required><br>

<label for="date"><b>Date of birth</b></label>

<input type="date" name="date" required><br>
<input type="submit" name="save"  value="Submit" onclick="return mess();">





</p>

</form>
</div>
<p2 style="margin-left:210px; margin-top:-40px;">

<a href = "https:whatsapp.com"  target = "_blank"> 
<img src = "imagelogo2.jpeg" alt="whatsapp" height="50px" weidth="35px"> </a></map>
<a href = "https://www.facebook.com/" target = "_blank">
<img src = "imagelogo6.jpg" alt = "facebook" height="50px" weidth="35px" ></a>

<a href = "https://www.instagram.com/" target = "_blank">
<img src = "imagelogo4.jpeg" alt = "instagram" height="50px" weidth="50px"></a>
<a href = "https://www.twitter.com/" target = "_blank">
<img src = "imagelogo5.jpg" alt = "twitter"height="50px" weidth="50px"  ></a><br></p2>
<blink><p1 style="color:red;font-size:22px;margin-left:265px;"> <b>Made in India</b><br></p1><p3 style="color:blue;font-size:22px;margin-left:160px;"><b> CopyRight 2021 Milleiunium Hospital </b></p3></blink> 

</body>
</div>
</html>


<?php
$conn=mysqli_connect('127.0.0.1:3307','root','','hospital');

if (isset($_POST['save']))
{
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$cn=$_POST['Contact'];
$age=$_POST['Age'];
$address=$_POST['address'];
$email=$_POST['Email'];
$caste=$_POST['caste'];
$gender=$_POST['gender'];
$Qualification=$_POST['Qualification'];
$Experience=$_POST['Experience'];
$date=$_POST['date'];

$s="select * from adddoctor where fname='$fn'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);

if($num==1)
{
		    echo '<script>';
        echo 'alert("fail to insert record ! user already exist ! try to signup with another name ! ")';
        echo '</script>';
}
else
{
$query="insert into adddoctor values ('$fn','$ln','$cn','$age','$address','$email','$caste','$gender','$Qualification','$Experience','$date')";
$data=mysqli_query($conn,$query);



if($data)
{
	
echo "<script LANGUAGE='JavaScript'>
    window.alert('Record inserted successfully !');
    window.location.href='AdminDashboard.html';
    </script>";
   	 
	
	
	
}

else 
{
	echo '<script> alert("failed to insert  data into database");  </script>';

	
}


}



}

?>