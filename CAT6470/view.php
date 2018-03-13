<?php 
session_start();
if (!isset($_SESSION['user'])) {
	ob_start();
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ViewCAT</title>
</head>
<body>
<center>
	<h1>YOU HAVE SUCCESSFULLY LOGGED IN. CONGRATULATIONS.</h1><br>
	<form method="POST" action="update.php">
		<label><u>Change Your Password</u></label><br>
		<p>username:
		<input type="text" name="username" placeholder="Input Username"></p>
		<p>old password:
		<input type="password" name="pass_1" placeholder="Old Password"></p>
		<p>new password:
		<input type="password" name="pass_2" placeholder="New Password"></p>
		<input type="submit" name="submit" value="Change Password">
	</form>
	<a href="logout.php" class="btn btn-warning">LOGOUT</a>
</center>
</body>
</html>