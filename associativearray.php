<?php 
$student = array( 'aditi'=>22,"sharma"=>21);
echo "<pre>";
print_r($student);
echo $student['aditi'];

$keys = array_keys( $student ); 
      
echo "The keys array: "; 
  
print_r($keys); 

 ?>