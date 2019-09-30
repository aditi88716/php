
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="userdata_post.php" method="post">
	<center><h2>post</h2></center>
	<CENTER><table border="1" align="center" width="60%">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea placeholder="Address" name="address"></textarea></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>Male<input type="radio" name="gender" value="male" />
				Female<input type="radio" name="gender" value="female" />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<center><input type="submit" name="" value="submit"></center>
			</td>
		</tr>

	</table></CENTER>
</form>
</body>
</html>