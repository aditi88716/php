<?php
session_start();
echo "welcome  ". $_SESSION['username'];
/*echo "welcome  ". $username;*/
?>
<a href="logout.php">logout</a> 