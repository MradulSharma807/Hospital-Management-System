<?php
session_start();
include('adminlogin.php');
$conn=mysqli_connect('127.0.0.1:3307','root','','hospital');

$name=mysqli_real_escape_string($conn,$_POST['username']);
$pass=mysqli_real_escape_string($conn,$_POST['password']);
$confirmpass=mysqli_real_escape_string($conn,$_POST['confirmpassword']);
$emailid=mysqli_real_escape_string($conn,$_POST['emailid']);

$s="select * from adminlogintable where username='$name'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if( $num==1 )

{
	 
	    echo '<script>';
        echo 'alert("fail to insert record ! user already exist ! try to login with that name or signup with another name ")';
        echo '</script>';

	
}
	

else 
{
	   $reg="insert into adminlogintable values('$name','$pass','$confirmpass','$emailid')";
        mysqli_query($conn,$reg);
	  
		     echo '<script>';
        echo 'alert("Record inserted successfully!")';
        echo '</script>';
   	 

}

	 


?>