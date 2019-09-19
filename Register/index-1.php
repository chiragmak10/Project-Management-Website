<?php
$First=$_POST['First'];
$Last=$_POST['Last'];
$pnr=$_POST['pnr'];
$pass=$_POST['pass'];
$faculty=$_POST['Department'];
$class=$_POST['optradio'];


try {
  $con=mysqli_connect("localhost","root","","lib") or die(mysqli_error());
}

//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}


$query = "insert into lib(First,Last,pnr,pass,faculty,class) values('".$First."','".$Last."','".$pnr."','".$pass."','".$class."','".$faculty."');";
if(mysqli_query($con,$query))
{   echo "<script type='text/javascript'>alert('Registered successfully');</script>"; 
	header("Location:..\index.html");
	
}
else{
	echo "<script type='text/javascript'>alert('Unsuccessful Please Try Again');</script>"; 
}
mysqli_close($con);
?>