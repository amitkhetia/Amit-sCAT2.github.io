<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- links used in styling-->
	<link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
	<div class="main">
		<div class="contain">
			<div class="heading text-center">
				<h2>Log-in Here</h2>
			</div>
			<br><br><br>
			<!-- Log in form-->
			<form method="POST" action="get.php">
				<div class="fluid">
					<input type="text" name="username" placeholder="Enter Your Username" required><br>
				</div>
				<br>
				<br>
				<div class="fluid">
					<input type="password" name="password" placeholder="Enter Your Password" required><br>
				</div>
				<br>
				<div class="text-center reset">
					<h4><u><a href="forgot.php">Forgot Password?</a></u></h4>
				</div>
				<br>
				<div class="text-center submit">
					<input type="submit" name="submit" value="Login">
				</div>
				<br><br>
			</form>
		</div>
	</div>
</body>
</html>