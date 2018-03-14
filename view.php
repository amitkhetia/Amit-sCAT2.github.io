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
</head>
<body>
	<div class="text-center">
		<h1><span>-</span>LOG IN SUCCESSFULL<span>-</span></h1>
	</div>
	<div class="main">
		<div class="myss">
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
					<a class="cm-overlay">
						<div class="overlay">
							<h4>Photography</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay">
						<div class="overlay">
							<h4>Song Writing</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay">
						<div class="overlay">
							<h4>Journal Writing</h4>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 agileits_portfolio_grid">
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay">
						<div class="overlay">
							<h4>Office Management</h4>
						</div>
					</a>
				</div>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay">
						<div class="overlay">
							<h4>Web Design</h4>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 agileits_portfolio_grid">
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay">
						<div class="overlay">
							<h4>Game Design</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay">
						<div class="overlay">
							<h4>Databases</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay">
						<div class="overlay">
							<h4>Watch making</h4>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 agileits_portfolio_grid">
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay">
						<div class="overlay">
							<h4>App Development</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay">
						<div class="overlay">
							<h4>Finance Management</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay">
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