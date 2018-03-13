<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="register.php">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
<form method="POST" action="get.php">
	<p>username:
	<input type="text" name="username" placeholder="Input your username"></p>
	<p>password:
	<input type="password" name="password" placeholder="Input your password"></p>
	<input type="submit" name="submit" value="Login">

</form>
</body>
</html>