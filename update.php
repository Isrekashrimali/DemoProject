
<?php
include("connection.php");
error_reporting(0);
$_GET['$rn'];
$_GET['$sn'];
$_GET['$cl'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>insert</title>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Student Details</h2>
                        <form action="" method="GET">
						<div class="form-group">
                        <label>Rollno</label>
                        <input type="number_format" value="<?php echo $_GET['rn']; ?>" name="rollno" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" value="<?php echo $_GET['sn']; ?>" name="studentname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Class</label>
                       <p> <input type="text" value="<?php echo $_GET['cl']; ?>" name="class" class="form-control"> </p>
                   
                    </div>
					
					<input type="submit" name="submit"class="btn btn-default" value="update">
						</form>
                    
                </div>  
			</div>
		</div>
<?php
	if($_GET['submit'])
	{
		$rollno =$_GET['rollno'];
		$name =$_GET['studentname'];
		$class =$_GET['class'];
		$query ="UPADTE STUDENTREC SET NAME='$name' , CLASS='$class' , WHERE ROLLNO='$rollno'";
		$data = mysqli_query($conn, $query);
		if($data)
		{
			echo "<font color='green'> Record updated successfully."; 
		}
		else
		{
			echo "<font color='red'>record not updated.";
		}
			
	}
else
{
 echo "<font color='blue'>click on Update button to save the changes.";	
}
?>
		</body>
</html>