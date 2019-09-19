<?php
session_start();
$use=$_POST['pnr'];
$pass=$_POST['pass'];

try {
 $con=mysqli_connect("localhost","root","","lib") or die(mysqli_error());
  //If the exception is thrown, this text will not be shown
}
//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
$query = "select * from lib where pnr='".$use."' and pass='".$pass."';";
$result=mysqli_query($con,$query);
//$row=$result->fetch_assoc();
$row = mysqli_fetch_array($result);
if($row['faculty'] == 'student')
{
	echo "<script type='text/javascript'>alert('login successfully as Student ');</script>";
	header('Location:Project_upload\index.html') ;
	exit();
}
elseif ($row['faculty'] == 'teacher')
{
	echo "<script type='text/javascript'>alert('login successfully as Teacher');</script>";

	header('Location:Project_upload\teach\index.html') ;
	exit();
}	
else{
	echo "<script type='text/javascript'>alert('login failed');</script>";
}
mysqli_close($con);
?>
