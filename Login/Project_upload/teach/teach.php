


<?php
	
$use=$_POST['Last']; // Name assinged to input field in HTML page
$pass=$_POST['Department'];
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbName="lib";


	//$conn=new mysqli($host,$dbUsername,$dbPassword,$dbName);
	
	$con=mysqli_connect($host,$dbUsername,$dbPassword,$dbName)or die(mysqli_error());
	
	$sql="select * from registerdata where  subject='".$use."' and year='".$pass."';";
	

	if(mysqli_query($con,$sql))
		{    //header("Location: crouselsearch.html");
			// echo "<script type='text/javascript'>alert('login successfully');</script>";

			$records=mysqli_query($con,$sql);


				
		}else{    //header("Location: inputform2.php");
      echo "<script type='text/javascript'>alert('login unsuccessfully');</script>";
		}






	

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


	<title>
		Student Records['file']
	</title>
</head>
<body style="background-color: #f1f1f1">

<table class="table table-striped" width="600" border="2" style="border-style: 2px solid black"  cellpadding="1" cellspacing="1" style="background-color: #34dbeb">
	<tr style="background-color: #ebe534">
		<th>Group Name</th>
		<th>Group ID</th>
		<th>FILE</th>
		<th>Download link</th>		
	</tr>
<?php

while ($student=mysqli_fetch_array($records)) {
		# code...mysqli_fetch_assoc($records)    ...$row = mysqli_fetch_array($result);
	
	echo "<tr>";
	echo "<td>".$student['group_name']."</td>";

	echo "<td>".$student['pnr']."</td>";

	echo "<td>".$student['file']."</td>";

	echo "<td><button><a href=".$student['file'].">Download</a></button></td>";

	
	}



?>



</table>


</body>
</html>

