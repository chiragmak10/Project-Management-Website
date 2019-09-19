<?php
$use=$_POST['name']; // Name assinged to input field in HTML page
$pass=$_POST['pub'];
$roll=$_POST['aut'];
// Name assinged to input field in HTML page
try { 
	echo "\n Inside try block"; 
		  
	// If var is zero then only if will be executed 
	if($var == 0) 
	{ 
			  
		// If var is zero then only exception is thrown 
		throw new Exception('Number is zero.'); 
			  
		// This line will never be executed 
		echo "\n After throw (It will never be executed)"; 
	} 
} 
$con=mysqli_connect("localhost","root","","lib") or die(mysqli_error());

$query = "insert into search(book_name,author,publication) values('".$use."','".$pass."','".$roll."');";
if(mysqli_query($con,$query))
{    echo "<script type='text/javascript'>alert('Uploading succesfull');</script>";
}

else{
	echo "<script type='text/javascript'>alert('uploading unsuccesfull');</script>";
}
mysqli_close($con);
?>