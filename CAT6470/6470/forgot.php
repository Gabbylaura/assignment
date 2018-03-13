<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style type="text/css">
		body{
			background-image: url(images/scenery_2.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		.main{
			padding-top: 50px;
		}
		.mayhem {
			width: 40%;
			margin: 125px auto;
			-webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
			padding-top: 50px;
		}
		.halo {
			padding: 12px 15px;
			border-bottom:2px solid red;
			border-right: 2px solid red;
			background: #fff;
		}
		.halo input[type="text"], .halo input[type="password"] {
			outline: none;
			font-size: .9em;
			border: none;
			background: transparent;
			width: 60%;
			color: #000;
			font-family: "Times New Roman", Times, Serif;
			letter-spacing: 1px;
		}
		h3{
			color: black;
			font-family: "Times New Roman", Times, Serif;
		}
	</style>
</head>
<body>
	<div class="text-center dark">
		<h3>It seems you have forgotten your password.<br>
		Fill in the information in the form below to retrieve your password</h3>
	</div>
	<div class="main">
		<div class="mayhem">
			<div class="heading text-center">
				<h2>Password Check</h2>
			</div>
			<br><br><br>
			<form method="POST" action="fupdate.php">
				<div class="halo">
				<input type="text" name="username" placeholder="Enter Your Username">
				</div>
				<br>
				<div class="halo">
				<input type="number" name="phone" placeholder="Enter Your Phone Number">
				</div>
				<br>
				<div class="text-center submit">
				<input type="submit" name="submit" value="View Password">
				</div>
			</form>
		</div>
	</div>
</body>
</html>