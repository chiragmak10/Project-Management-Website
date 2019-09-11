<?php
$use=$_POST['sch']; // Name assinged to input field in HTML page

$con=mysqli_connect("localhost","root","","lib") or die(mysqli_error()); // Creation of Connection 
$query = "select * from search where book_name='".$use."' or publication='".$use
."' or author='".$use."';";
$result=mysqli_query($con,$query);
$resultCheck=mysqli_num_rows($result);
if($resultCheck>0)
{
	echo "<table>";
echo " <tr>
<th>Book Name</th>
<th>Publication</th>
<th>Author</th>
</tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr><th>'".$row['book_name']."'</th><th>'".$row['publication']."'</th><th>'".$row['author']."'</th></tr>";

}
echo "</table>";

}
else{
	echo "<script type='text/javascript'>alert('The book is not avilable in Library');</script>";
	#echo "login failed";
}
echo "<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>";

mysqli_close($con);
?>