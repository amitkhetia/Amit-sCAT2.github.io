<?php 
session_start();
?>s
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<!--links-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body class="john">
	<div class="charlie">
		<div class="firefox">
			<div class="heading">
				<h2>Register Here</h2>
			</div>
			<br><br><br><br>
			<form method="POST" action="input.php">
				<div class="form-group text-center knight">
					<input type="text" name="user" placeholder="Enter your Username" required>
					<br>
					<br>
				</div>
				<div class="form-group text-center knight">
					<input type="password" name="password" placeholder="Enter Your Password" required>
					<br>
					<br>
				</div>
				<div class="form-group text-center knight">
					<input type="number" name="number" placeholder="Phone Number" required>
					<br>
					<br>
				</div>
				<div class="form-group text-center submit">
					<input type="submit" name="submit" value="Register Now">
				</div>
			</form>
		</div>
	</div>
		<?php 
	if (isset($_POST['submit'])) {
		extract($_POST);
		$password = md5($_POST['password']);
		$userName = $_POST['user'];
		$number = $_POST['phone_number'];
		$sql1 = "SELECT USERNAME FROM 6470amit WHERE USERNAME = '$userName'";
		$select = mysqli_query($conn, $sql1);
		$sql2 = "INSERT INTO 6470amit (USERNAME, PASSWORD_HASH, PHONE) VALUES ('$userName', '$password', '$number')";
		$row = mysqli_fetch_array($sql1, MYSQLI_ASSOC);
		$count = mysqli_num_rows($sql1);
		if ($count == 0) {
			mysqli_query($conn, $sql2);
		} else{
			echo "<h2>Registration failed: Username already exists.</h2>";
		}
	}
	?>
</body>
</html>