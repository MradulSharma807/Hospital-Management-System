<?php
include("connection.php");

 $f=$_GET['fname'];
  $showquery="select * from adddoctor where fname='$f'";
  $showdata=mysqli_query($conn,$showquery);
  $arrdata=mysqli_fetch_array($showdata);
 if(isset($_POST['submit']))
 {
$fo=$_POST['fname'];

$l=$_POST['lname'];
$ct=$_POST['Contact'];
$age=$_POST['Age'];
$address=$_POST['address'];
$email=$_POST['Email'];
$cs=$_POST['caste'];
$gn=$_POST['gender'];
$Qualification=$_POST['Qualification'];
$Experience=$_POST['Experience'];
$date=$_POST['date'];


$query="UPDATE `hospital`.`adddoctor`SET`fname`='$fo',`lname`='$l',`Contact`='$ct',`Age`='$age',`address`='$address',`Email`='$email',`caste`='$cs',`gender`='$gn',`Qualification`='$Qualification',`Experience`='$Experience',`Date Of Birth`='$date' WHERE fname='$f'";

$data=mysqli_query($conn,$query);
if($data)
{
	echo '<script> alert("Record Updated Successfully !");  </script>';
	 ?>
	 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/viewdoctor.php">
	 <?php
}
else
{
	echo '<script> alert("failed to insert  data into database");  </script>';
	 
}
 
 }
 

?>

<!DOCTYPE html>

<html>
<head><title>Update Doctor</title>
<style>

h1
{
z-index:100;
position:absolute;


width:1325px;
font-family:alGerian;
margin-bottom:0px;padding 0px;
font-size:32px;
line-height:30px;
text-align:center;
color:RED;


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
	background-image:url(image28.jpg);width:100%px;
	
}
    

input[type=submit]
{
margin:20px;
margin-left:150px;
width:200px;
height:35px;
color:red;
background-color:black;
font-size:23px;
border-radius:15px;
cursor: pointer;
font-weight: bold;
}
input[type=text],input[type=number],input[type=Email]
{
border-radius:5px;
background-color:#ffb3da;
padding:8px;10;
MARGIN:5PX;
COLOR:black;
width:240px;

font-weight: bold;
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
border:2px solid black;
margin:5.5px;
width:256px;
background-color:#ffb3da;
color:black;

font-weight: bold;

}


input[type="date"]::-webkit-calendar-picker-indicator {
  
    opacity:30;
	color:black;
    font-weight: bold;
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
	background-color:#ffb3da;
	color:black;
	width:256px;
	font-weight: bold;
	height:32px;
	MARGIN:5PX;
border:2px solid black;

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
        margin-left:600px;      
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
        <source src="video7.webm" type="video/webm">
        <source src="video7.mp4" type="video/mp4">
        <source src="video7.ogv" type="video/ogg">
    </video>

<h1><blink><marquee behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();"><b>WELCOME TO UPDATE THE DOCTOR:</b></marquee></blink></h1>


<div class="div">

<form METHOD="POST">
<p style="margin-left:50px">
<label for ="fname"><b>First Name</b></label>
<input type="text" id="fname" value="<?php echo $arrdata['fname'];?>" name="fname" placeholder="Enter your name here" ><br>


<label for="lname"><b>Last Name</b></label>
<input type="text" id="lname" name="lname" value="<?php echo $arrdata['lname'];?>"placeholder="Enter Sir name here" ><br>
<label for="Contact"><b>Contact Number </b></label>
<input type="text" id="Contact" name="Contact" maxlength="10" onkeypress="return onlyNumberKey(event)" value="<?php echo $arrdata['Contact'];?>" placeholder="Enter your Mobile Number" ><br>
<label for="Age"><b>Age </b></label>
<input type="text" id="Age" name="Age" maxlength="3" onkeypress="return onlyNumberKey(event)" value="<?php echo $arrdata['Age'];?>" placeholder="Enter the Age" ><br>
<label for ="Address"><b>Address</b></label>
<input type="text" id="address" name="address" value="<?php echo $arrdata['address'];?>" placeholder="Enter your Address" ><br>
<label for ="Email"><b>Email</b></label>
<input type="Email" id="Email" name="Email" value="<?php echo $arrdata['Email'];?>" placeholder="Enter your Email" ><br>


 
<label for="CASTE"><b>Select Your Caste</b></label>

<?php
$print1="GENERAL";
  $print2="SC";
   $print3="ST";
 if($arrdata['caste']=="GENERAL")
 {
	  $print1="GENERAL";
  $print2="SC";
   $print3="ST";
 }
 else if($arrdata['caste']=="SC")
 {
	  $print1="SC";
  $print2="GENERAL";
   $print3="ST";
 }
 else if($arrdata['caste']=="ST")
 {
	  $print1="ST";
  $print2="GENERAL";
   $print3="SC";
 }
?>

<select name="caste">


<option value="<?php echo $print1;?>"><?php echo $print1;?></option>
<option value="<?php echo $print2;?>"><?php echo $print2;?></option>
<option value="<?php echo $print3;?>"><?php echo $print3;?></option>
</select><br>
<?php
$printg1="MALE";
  $printg2="FEMALE";
   $printg3="OTHER";
 if($arrdata['caste']=="MALE")
 {
	 $printg1="MALE";
  $printg2="FEMALE";
   $printg3="OTHER";
 }
 else if($arrdata['caste']=="FEMALE")
 {
$printg1="FEMALE";
  $printg2="MALE";
   $printg3="OTHER";
 }
 else if($arrdata['caste']=="OTHER")
 {
	$printg1="OTHER";
  $printg2="MALE";
   $printg3="FEMALE";
 }
?>
<label for="gender"><b>Select Your gender</b></label>

<select name="gender" >
<option value="<?php echo $printg1;?>"><?php echo $printg1;?></option>
<option value="<?php echo $printg2;?>"><?php echo $printg2;?></option>
<option value="<?php echo $printg3;?>"><?php echo $printg3;?></option>
</select>
<br>
<label for ="Qualification"><b>Doctor Qualification</b></label>
<input type="text" id="Qualification" name="Qualification" value="<?php echo $arrdata['Qualification'];?>" placeholder="Enter the qualification" ><br>

<label for ="Experience"><b>Work Experience</b></label>
<input type="text" id="Experience" name="Experience" maxlength="2" onkeypress="return onlyNumberKey(event)" value="<?php echo $arrdata['Experience'];?>" placeholder="Enter experience in year" ><br>

<label for="date"><b>Date of birth</b></label>

<input type="date" name="date" value="<?php echo $arrdata['Date Of Birth'];?>"><br>
<input type="submit" name="submit"  value="Update" >





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
<script>
    function onlyNumberKey(evt) {
         
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>
</div>
</html>


