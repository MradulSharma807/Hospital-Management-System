<?php


if(isset($_POST['search']))
{
   	    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
  $query = "SELECT * FROM addpatient WHERE  CONCAT(`fname`,`lname`,`Contact`,`Age`,`address`,`caste`,`gender`,`Admitdate`,`Date Of Birth`,`Disease`) LIKE '%".$valueToSearch."%'";
 
   $search_result = filterTable($query);
	

    
}
 else {
    
$query = "SELECT * FROM addpatient";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
   $conn=mysqli_connect('127.0.0.1:3307','root','','hospital');
     $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>DATA SEARCH</title>
        <style>
         .div1
{
	margin-top:-10px;
	
     height:auto;
     overflow:auto;
    margin-top:0px;
	
	width:100%;
	margin
	border:3px solid #black;
	
	
}

td,th
{
	color: #ffff99;
BACKGROUND-COLOR:BLACK;
	
	padding:4px;
}
table
{
	margin-top:20px;
	width:100%;
}
blink {
  -webkit-animation: 1.7s linear infinite condemned_blink_effect; 
  animation: 1s linear infinite condemned_blink_effect;
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
input[type=submit]
{
	background-color:blue;
	color:white;
	font-family:arial;
	border-radius:40px;
	font-size:20px;
	width:150px;
	height:35px;
	text-align:center;
	  cursor:pointer;
}
input[type=text]
{
    background-color:ORANGE;
	color:black;
	font-family:arial;
	border-radius:40px;
	font-size:20px;
	width:200px;
	height:25px;
	text-align:center;
	
}
::placeholder
{
	color:white;
}
img
{
	width:8%;
	height:8%;
    margin-left:25px;
}
#head
{
	margin-left:500px;
	margin-top:-130px;
	font-size:40px;
	color:#003300;
}
       </style>
    </head>
<body style="background-image:url(image34.jpg);">
        
        <form action="viewpatient2.php" method="post">
		    <div class="div2">
			
			<h1><img src="patient.png"></h1>
			<span><h1 id="head"><u>View Patient by:</u></h1></span>
            <label for ="data" style="font-size:23px;color:#003300;margin-left:500px;"><b>Enter Your Data/Word Here :</b></label>
            <input type="text" name="valueToSearch" placeholder="Value To Search" style="margin-left:20px;margin-right:20px;" >
            <input type="submit" name="search" value="Search"><br><br>
            </div>  
		 <div class="div1">
            <table  cellspacing="16" border="2" style="border:3px solid black;" >
			
             <tr>
             <th align="center">First Name</th>
              <th align="center">Last Name</th>
              <th align="center">Contact</th>
              <th align="center">Age</th>
               <th align="center" >Address</th>
              
               <th align="center">Caste</th>
			  <th align="center">Gender</th>
               <th align="center">Admit Date</th>
			   <th  align="center">Date Of Birth</th>
			   <th align="center">Disease</th>
			
                </tr>

      
                <?php while($row = mysqli_fetch_array($search_result)):?>

				<tr>
		<td  align="center"><b><?php echo$row['fname'];?></b></b></td>
		<td align="center"><b><?php echo$row['lname'];?></b></td>
		<td align="center"><b><?php echo$row['Contact'];?></b></td>
		<td align="center"><b><?php echo$row['Age'];?></b></td>
		<td align="center"><b><?php echo$row['address'];?></b></td>
		<td align="center"><b><?php echo$row['caste'];?></b></td>
		<td align="center"><b><?php echo$row['gender'];?></b></td>
	    <td align="center"><b><?php echo$row['Admitdate'];?></b></td>
		<td align="center"><b><?php echo$row['Date Of Birth'];?></b></td>
		<td align="center"><b><?php echo$row['Disease'];?><bb></td>

	  
		
		</tr>
                <?php endwhile;?>
            </table>
			</div>
 
        </form>
        
    </body>
</html>