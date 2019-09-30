<?php
error_reporting(0);
session_start();

$_SESSION['username']="Aditi Jain";
$_SESSION['class']="IT";

echo $_SESSION['username'];
echo $_SESSION['class'];

//session_unset(); //session end
//echo $_SESSION['username'];


?>