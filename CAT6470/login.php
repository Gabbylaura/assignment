<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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