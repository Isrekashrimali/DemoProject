<?php 
include("connection.php");
error_reporting(0);
$query ="SELECT * FROM STUDENTSREC";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


if($total =! 0)
{
	 

	?>
	
	<table class="table table-bordered">
	<tr>
	<th>Roll no</th>
	<th colspan="2">Name</th>
	<th colspan="2">Class</th>
	<th colspan="2">Oprations</th>
	</tr>
	<tr>
	<td>Roll no</th>
	<td colspan="2">Name</th>
	<td colspan="2">Class</th>
	<td><a href='update.php'>Edit</a></td>
	<td><a href='delete.php'>Delete</a></td>
	
	</tr>
	
	

	<?php

	while($result= mysqli_fetch_assoc($data))
	{
		echo $result['rollno']." ".$result['Name']." ".$result['Class']."</br>";
	}
}
else
{
echo "no record";
}
?>	
</table>