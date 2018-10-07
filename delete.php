<?php 
include ("connection.php");
$rollno =$_GET['rn'];
$query ="DELETE FROM STUDENTSREC WHERE ROLLNO='$rollno'";
$data = mysqli_query($conn,$query);
if($data)
{
	echo "<font color='green'>Record deleted from table";
}
else
 {
    echo "<font color='red'>Opps...Still record there!!!!";
 }
?>	