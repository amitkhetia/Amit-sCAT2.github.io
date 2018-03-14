<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="text-center dark">
		<h3>Forgot password?<br>
		Fill in the form below to retrieve your password</h3>
	</div>
	<div class="main">
		<div class="contain">
			<div class="heading text-center">
				<h2>Password Check</h2>
			</div>
			<br><br><br>
			<form method="POST" action="fupdate.php">
				<div class="fluid">
				<input type="text" name="username" placeholder="Enter Your Username">
				</div>
				<br>
				<div class="fluid">
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