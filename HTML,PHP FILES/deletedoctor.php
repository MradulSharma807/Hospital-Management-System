<?php
session_start();
include("connection.php");
error_reporting(0);
$fname=$_GET['un'];
$query="delete from adddoctor where fname='$fname'";
$data=mysqli_query($conn,$query);
if($data)
{
echo "<script>alert('Deleted record successfully');document.location='viewdoctor.php'</script>";
}
else
{

		echo "<script>alert('Failed to delete Record form data base');document.location='viewdoctor.php'</script>";
}

	
?>