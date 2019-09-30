<?php
$s = array('aditi' => 02,'sharma'=> 03,'ayusmita'=>19 );
print_r($s);
foreach ($s as $key => $value) 
{
	echo "value is ",$value," key is", $key."<br>";
}

$a=10;
if ($a=10) 
{
	echo "$a.<br>";
}
else
echo "not equal.<br>";

$a=10;
if ($a=10) 
{
	echo "$a.<br>";
}
else if($a>=9)
echo "2nd.<br>";
else
echo "3rd.<br>";


function sum($a,$b)
{
	return $a+$b;
}

$b=sum(2,3);
echo "$b.<br>";


$d=2;
switch ($d) 
{
	case '1':
		echo "$d.<br>";
		break;
	case '2':
		echo "$d.<br>";
		break;
	default:
		echo "default.<br>";
		break;
}



$i=1;
while ($i<10) 
{
	echo $i;
	$i++;
}


?>