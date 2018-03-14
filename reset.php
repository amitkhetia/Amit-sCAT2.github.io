<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
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
				<div class="fluid">
					<input type="text" name="username" placeholder="Username" required><br>
				</div>
				<br>
				<br>
				<div class="fluid">
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