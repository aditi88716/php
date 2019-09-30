<?php
session_start();
include("dbcon.php");
$username = $_SESSION['username'];

if($username == true)
{

}
else
{
	header('location:login.php');
}

$query="SELECT * FROM admin WHERE username='$username'";
$data = mysqli_query($con,$query);
$result = mysqli_fetch_assoc($data);
echo "Welcome".$result['username']."<br>";
echo "Welcome".$result['email']."<br>";
echo "Welcome".$result['college']."<br>";
echo "Welcome".$result['rollno']."<br>";
echo "Welcome".$result['address']."<br>";
?>

<a href="logout.php">logout</a>