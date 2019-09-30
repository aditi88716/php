<?php 
$student = array( 'aditi'=>22,"sharma"=>21,"kuch"=>20);
//print_r($student);
//echo $student['aditi'];

foreach ($student as $key => $value)
{
	echo "key is " .$key. " value is " .$value. "<br>";
}
foreach ($student as $mykey => $myvalue)
{
	echo "key is " .$mykey. " value is " .$myvalue. "<br>";
}

 ?>