<!DOCTYPE html>


<html>
<head><title>Add Patient</title>
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
color:#e60000;


}
::placeholder
{
	COLOR:black;;
	font-weight:bold;
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
	background-image:url(58.jpg);width:100%px;
	
}
    

input[type=submit]
{
margin:20px;
margin-left:150px;
width:200px;
height:35px;
color:#e60000;
background-color:#33ff99;
font-size:23px;
border-radius:15px;
cursor: pointer;
font-weight:bold;


}
input[type=text],input[type=number],input[type=Email]
{
border-radius:5px;
background-color:#8ec0d7;
padding:8px;10;
MARGIN:5PX;
COLOR:black;
width:239px;
font-weight:bold;
border:2px solid black;
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
background-color:#8ec0d7;
margin:5.5px;
width:256px;
border:2px solid black;
color:black;
font-weight:bold;
}


input[type="date"]::-webkit-calendar-picker-indicator {
 
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
	background-color:#8ec0d7;
	color:black;
	width:254px;
	font-weight:bold;
	height:35px;
	MARGIN:5PX;
    border:2px solid black;
border-radius:5px;
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
        margin-left:650px;      
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
        <source src="video8.webm" type="video/webm">
        <source src="video8.mp4" type="video/mp4">
        <source src="video8.ogv" type="video/ogg">
    </video>

<h1><blink><marquee behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();"><b>WELCOME TO PATIENT FORM:</b></marquee></blink></h1>


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


<label for="date1"><b>Admit Date</b></label>

<input type="date" name="date1" required><br>
<label for="date2"><b>Date Of Birth</b></label>

<input type="date" name="date2" required><br>
<label for="disease"><b>Select Your Disease</b></label>
<select name="disease" required>
<option value="Covid-19">Covid-19</option>
<option value="Neurological">Neurological</option>
<option value="Gastrological">Gastrological</option>
<option value="Cardiological">Cardiological</option>
<option value="Fever">Fever</option>
<option value="Bone Fractured">Bone Fractured</option>
<option value="Allergies">Allergies</option>
<option value="Diarrhea">Diarrhea</option>
<option value="Mononucleosis">Mononucleosis</option>
<option value="B.P/Sugar">B.P/Sugar</option>
<option value="Cancer">Cancer</option>
</select>
<br>
<input type="submit" name="save"  value="Submit" >





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
$caste=$_POST['caste'];
$gender=$_POST['gender'];
$date1=$_POST['date1'];
$date2=$_POST['date2'];
$disease=$_POST['disease'];

$s="select * from addpatient where fname='$fn'";
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
$query="insert into addpatient values ('$fn','$ln','$cn','$age','$address','$caste','$gender','$date1','$date2','$disease')";
$data=mysqli_query($conn,$query);



if($data)
{
	
echo "<script LANGUAGE='JavaScript'>
    window.alert('Record inserted successfully !');
    window.location.href='PatientDashboard.html';
    </script>";
   	 
	
	
	
}

else 
{
	echo '<script> alert("failed to insert  data into database");  </script>';

	
}


}



}

?>