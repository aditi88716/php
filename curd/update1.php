<?php

include('dbcon.php');
if (isset($_GET['id'])) 
{
	$id = $_GET['id'];
	$query="SELECT * FROM student where id='$id'";
	$fire = mysqli_query($con,$query) or die("can not fetch the data".mysqli_error($con));
	$user=mysqli_fetch_assoc($fire);
}
?>


<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
	$id = $_GET['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$q = "update student set id=$id, username='$username', password='$password' where id=$id";
	$query = mysqli_query($con,$q);
	header('location: display.php');
}

  
?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<br><br>
		<h1 class="text-warning">Insert operation</h1>
		<form method="post">
			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="username" class="form-control" value="<?php echo $user['username']?>">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="text" name="password"  class="form-control" value="<?php echo $user['password']?>">
			</div>
			<input type="submit" name="submit" class="btn btn-info">
		</form>
	</div><!--end of container-->
</body>
</html>