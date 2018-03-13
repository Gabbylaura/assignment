<!-- This is the very first webpage (Home Page) -->
<!-- As per the user's needs, he/she will choose the next step based on their situation at the moment,
	whether he/she is a new member(thus, has to register) or is already a member(thus, will simply log in) -->
<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

	<?php session_start();
	$server = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "6470";

	$conn = mysqli_connect($server, $userName, $password, $dbName)
	or die("Connection error");
	?>

	<!--navigation bar-->
	<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			    <div class="navbar-header">
				      <a class="navbar-brand" href="index.php">6470 Web App</a>
			    </div>
			    <ul class="nav navbar-nav">
				      <li><a href="register.php">New Member Registration</a></li>
				      <li><a href="login.php">Login</a></li>  
			    </ul>
		  </div>
	</nav>

	<?php 
	if (isset($_POST['submit'])) {
		extract($_POST);
		$password = md5($_POST['password']);
		$userName = $_POST['user'];
		$number = $_POST['phone_number'];
		$sql1 = "SELECT USERNAME FROM 6470users WHERE USERNAME = '$userName'";
		$select = mysqli_query($conn, $sql1);
		$sql2 = "INSERT INTO 6470users (USERNAME, PASSWORD_HASH, PHONE) VALUES ('$userName', '$password', '$number')";
		$row = mysqli_fetch_array($sql1, MYSQLI_ASSOC);
		$count = mysqli_num_rows($sql1);
		if ($count == 0) {
			mysqli_query($conn, $sql2);
		} else{
			echo "<h2>Registration failed: Username already exists.</h2>";
		}
	}
	?>

	<div class="div1">
		<h1><span class="span_1">W</span>elcome 
			<span class="span_1">T</span>o 6470 
			<span class="span_1">T</span>o-<span class="span_1">D</span>o 
			<span class="span_1">W</span>eb 
			<span class="span_1">A</span>pp
		<br><h3>...we are here for you, with you...</h3>
		</h1>
	</div>

</body>
</html>