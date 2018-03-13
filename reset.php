<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style type="text/css">
	body{
		background-image: url(images/scenery.jpg);
		background-size: cover;
		background-attachment: fixed;
	}
	.mini {
		width: 40%;
		margin: 125px auto;
		-webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
		-moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
		box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
		padding-top: 50px;
	}
	.halo {
		padding: 12px 15px;
		border-bottom:2px solid orange;
		background: #fff;
	}
	.halo input[type="text"], .halo input[type="password"] {
		outline: none;
		font-size: .9em;
		border: none;
		background: transparent;
		width: 50%;
		color: #000;
		font-family: "Times New Roman", Times, Serif;
		letter-spacing: 1px;
	}
</style>
</head>
<body>
	<div class="main">
		<div class="mini">
			<div class="heading text-center">
				<h2>Reset Your Password</h2>
			</div>
			<br>
			<br>
			<form method="POST" action="update.php">
				<div class="halo">
					<input type="text" name="username" placeholder="Input Username" required><br>
				</div>
				<br>
				<br>
				<div class="halo">
					<input type="password" name="pass2" placeholder="New Password" required><br>
				</div>
				<br>
				<br>
				<div class="text-center submit">
					<input type="submit" name="submit" value="Change Password">
				</div>
				<br>
				<br>
				<br>
			</form>
		</div>
	</div>
</body>
</html>