<?php
$First=$_POST['First'];
$Last=$_POST['Last'];
$pnr=$_POST['pnr'];
$pass=$_POST['pass'];
$faculty=$_POST['Department'];
$class=$_POST['gen'];

$con=mysqli_connect("localhost","root","","lib") or die(mysqli_error());

$query = "insert into lib(First,Last,pnr,pass,faculty,class) values('".$First."','".$Last."','".$pnr."','".$pass."','".$class."','".$faculty."');";
if(mysqli_query($con,$query))
{    header("Location: index.html");
	#echo "Inserted successfully";
}
else{
	echo "Error while Inserting";
}
mysqli_close($con);
?>