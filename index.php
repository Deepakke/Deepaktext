<!DOCTYPE HTML>
<html lang="en_us">
<head>
<style>
body {
  background-image: url('download.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<meta charset="UTF-8">
<title>Student Management System</title>
</head>
<body>
 
 

<h3 align="right" style="margin-right:20px;"><a href="login.php">Admin Login</a></h3>
<h1 align="center">Welcome to Student Management System</h1>


<form Method="post" action="index.php">


<table style="width:30%" align="center" border="2">
       <tr>
	     <td colspan="2" align="center"><h3>Student Information</h3></td> 
	  </tr>
	  
	  <tr>
	      <td align="left">Choose Standerd</td>
		  <td>
		  <select name="std" required>
		  <option value="1">1st</option>
		  <option value="2">2nd</option>
		  <option value="3">3rd</option>
		  <option value="4">4th</option>
		  <option value="5">5th</option>
		  <option value="6">6th</option>
		  </select>
		  </td>
	  </tr>
	  <tr>
	      <td align=" left">Enter RollNo</td>
		  <td><input type="text" name="rollno" required></td>
	  </tr>
	  <tr>
	      <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
		  
	  </tr>

</table>
 
</form>
 
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$standerd=$_POST['std'];
	$rollno=$_POST['rollno'];
	 
	include('dbcon.php');
	include('function.php');
	
	showdetails($standerd,$rollno);
}

?>
	