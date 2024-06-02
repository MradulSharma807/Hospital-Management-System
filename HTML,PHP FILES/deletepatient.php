<?php
session_start();
include("connection.php");
error_reporting(0);
$fname=$_GET['un'];
$query="delete from addpatient where fname='$fname'";
$data=mysqli_query($conn,$query);
if($data)
{
echo "<script>alert('Deleted record successfully');document.location='viewpatient.php'</script>";
}
else
{

		echo "<script>alert('Failed to delete Record form data base');document.location='viewpatient.php'</script>";
}

	
?>