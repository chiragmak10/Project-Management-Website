<?php
$use=$_POST['Id']; // Name assinged to input field in HTML page
$pass=$_POST['pass'];// Name assinged to input field in HTML page
try
{
$con=mysqli_connect("localhost","root","","lib") or die(mysqli_error()); // Creation of Connection 
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}

$query = "select * from admin where username='".$use."' and password='".$pass."';";
$result=mysqli_query($con,$query);
$resultCheck=mysqli_num_rows($result);
if($resultCheck>0)
{
	
	header('Location:admin_upload\book_upload.html') ;
}
else{
	echo "<script type='text/javascript'>alert('login failed');</script>";
	#echo "login failed";
}
mysqli_close($con);
?>