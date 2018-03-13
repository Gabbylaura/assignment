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
	<title>CAT 2</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style type="text/css">
	body{
		background-image: url(images/apples.jpg);
		background-size: cover;
		background-attachment: fixed;
		font-family: "Times New Roman", Times, Serif;
	}
	.main{
		padding-top: 5px;
	}
	.mayhem {
		width: 40%;
		margin: 120px auto;
		-webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
		-moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
		box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
		padding-top: 50px;
	}
	.halo {
		padding: 12px 15px;
		border-bottom:2px solid green;
		background: #fff;
	}
	.halo input[type="text"], .halo input[type="password"] {
		outline: none;
		font-size: 1.2em;
		border: none;
		background: transparent;
		width: 50%;
		color: #000;
		font-family: "Times New Roman", Times, Serif;
		letter-spacing: 1px;
	}
	h1{
		padding-top: 20px;
		font-family: "Times New Roman", Times, Serif;
	}
	h3{
		letter-spacing: 1px;
		font-size: 20px;
	}
	h2{
		color: white;
		font-size: 30px;
	}
	.reset{
			color: white;
			font-family:  "Times New Roman", Times, Serif;
		}
	.logout{
		text-align: center;
	}
	.portfolio h2.title:after {
		left: 41.8%;
	}
	.agileinfo_portfolio_grid{
		margin-top:2em;
	}
	.hovereffect {
		width: 100%;
		height: 100%;
		overflow: hidden;
		position: relative;
		text-align: center;
	}
	.hovereffect .overlay {
		position: absolute;
		overflow: hidden;
		width: 80%;
		height: 80%;
		left: 10%;
		top: 10%;
		border-bottom: 1px solid #FFF;
		border-top: 1px solid #FFF;
		-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
		transition: opacity 0.35s, transform 0.35s;
		-webkit-transform: scale(0,1);
		-ms-transform: scale(0,1);
		transform: scale(0,1);
	}
	.hovereffect:hover .overlay {
		opacity: 1;
		filter: alpha(opacity=100);
		-webkit-transform: scale(1);
		-ms-transform: scale(1);
		transform: scale(1);
	}
	.hovereffect img {
		display: block;
		position: relative;
		-webkit-transition: all 0.35s;
		transition: all 0.35s;
		width: 100%;
	}
	.hovereffect:hover img {
		filter: brightness(0.6);
		-webkit-filter: brightness(0.6);
		-moz-filter: brightness(0.6);
		-o-filter: brightness(0.6);
		-ms-filter: brightness(0.6);
	}
	.hovereffect h4 {
		text-align: center;
		position: relative;
		font-size: 1.8em;
		font-weight: 600;
		background-color: transparent;
		color: #ffffff;
		padding: 2em 0 0 0;
		opacity: 0;
		filter: alpha(opacity=0);
		-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
		transition: opacity 0.35s, transform 0.35s;
		-webkit-transform: translate3d(0,-100%,0);
		transform: translate3d(0,-100%,0);
	}
	.hovereffect p{
		color: #FFF;
		line-height: 1.8em;
		margin: 0;
		font-size: .9em;
		opacity: 0;
		filter: alpha(opacity=0);
		-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
		transition: opacity 0.35s, transform 0.35s;
		-webkit-transform: translate3d(0,100%,0);
		transform: translate3d(0,100%,0);
	}
	.hovereffect:hover p, .hovereffect:hover h4 {
		opacity: 1;
		filter: alpha(opacity=100);
		-webkit-transform: translate3d(0,0,0);
		transform: translate3d(0,0,0);
	}
</style>
</head>
<body>
	<div class="text-center">
		<h1><span>-</span>YOU HAVE SUCCESSFULLY LOGGED IN. WELCOME<span>-</span></h1>
	</div>
	<div class="main">
		<div class="mayhem">
			<!-- Change of password -->
			<form method="POST" action="update2.php">
				<div>
					<h3 class="text-center">Change Your Password</h3>
				</div>
				<br>
				<div class="form-group text-center halo">
					<input type="text" name="username" placeholder="Enter Your Username"><br><br>
				</div>
				<div class="form-group text-center halo">
					<input type="password" name="pass1" placeholder="Enter Your Old Password"><br><br>
				</div>
				<div class="form-group text-center halo">
					<input type="password" name="pass2" placeholder="Enter Your New Password"><br><br>
				</div>
				<br>
				<div class="form-group text-center submit">
					<input type="submit" name="submit" value="Change Password" class="btn btn-success"><br>
				</div>
				<br>
				<div class="text-center reset">
					<h4><u><a href="reset.php">Reset Password?</a></u></h4>
				</div>
				<br>
			</form>
		</div>
	</div>
	<br>
	<div class="portfolio" id="projects">
	<div class="container">
		<h2 class="title text-center">Jobs To Do</h2>
		<div class="agileits_portfolio_grids">
			<div class="col-md-3 agileits_portfolio_grid">
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/photography.jpg">
						<img src="images/photography.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Photography</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/headphones.jpg">
						<img src="images/headphones.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Song Writing</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/ksenia-makagonova-229007.jpg">
						<img src="images/ksenia-makagonova-229007.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Journal Writing</h4>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 agileits_portfolio_grid">
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/office.jpg">
						<img src="images/office.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Office Management</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/poetry.jpg">
						<img src="images/poetry.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Poetry</h4> 
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/web.jpg">
						<img src="images/web.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Web Design</h4>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 agileits_portfolio_grid">
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/game.jpg">
						<img src="images/game.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Game Design</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/databases.jpg">
						<img src="images/databases.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Databases</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/time.jpg">
						<img src="images/time.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Watch making</h4>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 agileits_portfolio_grid">
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/pockimon.jpg">
						<img src="images/pockimon.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>App Development</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/eye.jpg">
						<img src="images/eye.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Finance Management</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/water.jpg">
						<img src="images/water.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Tuition</h4> 
						</div>
					</a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<br>
<br>
<div class="logout">
	<a href="logout.php" class="btn btn-success">LOG OUT</a>
</div>
<br>
<br>
</body>
</html>