<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<table class="table">
	<center><h1 class="">Display table</h1></center>
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">delete</th>
      <th scope="col">update</th>
    </tr>
  </thead>
  <?php
    include ('dbcon.php');

    $q = "select * from student";
    $query = mysqli_query($con,$q);

    while ($result = mysqli_fetch_array($query)) 
    {
    
   ?>
    <tbody>
  	<tr class="text-center">
  		<td><?php echo $result['id'];?></td>
  		<td><?php echo $result['username'];?></td>
  		<td><?php echo $result['password'];?></td>
  		
  		<!-- <td><a class="btn-primary btn" href="update.php?id=<?php echo $result['id'];?>" class="text-white">Update</a></td> -->
      <td><a class="btn-primary btn" href="update1.php?id=<?php echo $result['id'];?>" class="text-white">Update</a></td> 


      <td><a class="btn-danger btn" href="delete.php?id=<?php echo $result['id'];?>" class="text-white">delete</a></td>
  	</tr>
  	</tbody>
    
  <?php
  	}
  ?>

</table>
</body>
</html>