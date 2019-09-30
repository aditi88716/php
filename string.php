<?php

$name=strtoupper("aditi jain");
echo $name;

echo strlen($name);
$len = strlen($name);
if ($len>=5) 
{
	echo "hello";
}

$username="a@gmail.com";
$entered = strtolower("A@GmAil.com");
if ($username == $entered) 
{
	echo "correct";	
}
else
{
	echo "please check";
}
?>