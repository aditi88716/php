<?php
session_start();
include('dbcon.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<br>
	<br>
<form action="" method="post">
	<input type="text" name="username" placeholder="username"><br><br>
	<input type="text" name="password" placeholder="password"><br><br>
	<input type="submit" name="submit" value="login"><br>
</form>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM admin WHERE username='$username' && password='$password'";
	$data = mysqli_query($con,$query);
	$total = mysqli_num_rows($data);
	echo $total;

	if($total==1)
	{
		$_SESSION['username'] = $username;
		header('location:show.php');
	}
	else
	{
		echo "log in failed";
	}
}
?>