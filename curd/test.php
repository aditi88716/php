<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
	echo $username =$_POST['username'];
	echo $password =$_POST['password'];
	echo $email =$_POST['email'];
	echo $phone =$_POST['phone'];

	$q ="INSERT INTO student1(username,password,email,phone) VALUES('$username','$password','$email','$phone')";

	$query = mysqli_query($con,$q);
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
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="text" name="password"  class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Phone</label>
				<input type="text" name="phone" class="form-control">
			</div>
			<input type="submit" name="submit" class="btn btn-info">
		</form>
	</div><!--end of container-->
</body>
</html>