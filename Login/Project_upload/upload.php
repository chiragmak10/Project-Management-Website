	<?php
	
	if(isset($_POST['sub']))
	{	
		
	
		$con=mysqli_connect("localhost","root","","lib") or die(mysqli_error());
		$grp_name=$_POST['grp_name'];//group name
		$r_num=$_POST['r_num'];// 
		$Department=$_POST['Department']; //
		$Last=$_POST['Last'];  

		//$data=$_FILES['fileToUpload']['tmp_name'];

		
	$target_path = "uploads/";  
	$target_path = $target_path.basename($_FILES['fileToUpload']['name']);
		
		if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
			 
			$query = "insert into registerdata (group_name,pnr,subject,year,file) values('".$grp_name."','".$r_num."','".$Last."','".$Department."','".$target_path."');";						
			if(mysqli_query($con,$query))
				{
					echo "<script type='text/javascript'>alert('Project Details registered successfully!');</script>";  
					header("Location:../index.html");
				}  
				else{
					echo "<script type='text/javascript'>alert('Unable to Register!');</script>"; 	
				}
		mysqli_close($con);
			}
	}
	else{
		echo "<script type='text/javascript'>alert('Failed file updation');</script>";
	}
	session_destroy();
	?>