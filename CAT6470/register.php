<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<form method="POST" action="input.php">
	<p>username:
	<input type="text" name="user" placeholder="Username"></p>
	<p>password:
	<input type="password" name="password" placeholder="Password"></p>
	<p>phone number:
	<input type="number" name="number" placeholder="Phone Number"></p>
	<input type="submit" name="submit" value="Register" class="btn btn-success">
</form>
</body>
</html>