<?php
session_start();

$conn=mysqli_connect('127.0.0.1:3307','root','','hospital');

$name=mysqli_real_escape_string($conn,$_POST['username']);
$pass=mysqli_real_escape_string($conn,$_POST['password']);


$s="select * from patientlogintable where username='$name' && password='$pass'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
	
		echo "<script LANGUAGE='JavaScript'>
    window.alert('successfully sign in !');
    window.location.href='PatientDashboard.html';
    </script>";
}
else
{
	 
		echo "<script LANGUAGE='JavaScript'>
    window.alert('Invalid password or username !');
    window.location.href='patientlogin.php';
    </script>";
   	 
}

?>