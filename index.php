<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

	<?php session_start();
	$server = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "6470amit";

	$conn = mysqli_connect($server, $userName, $password, $dbName)
	or die("Connection error");
	?>

	<!--navigation bar-->
	<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			    <div class="navbar-header">
				      <a class="navbar-brand" href="index.php">6470amit Web App</a>
			    </div>
			    <ul class="nav navbar-nav">
				      <li><a href="register.php">New Member Reg</a></li>
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

	<div class="div1">
		<h1><span class="span_1">Welcome 
			<span class="span_1">To 6470amit 
			<span class="span_1">To-Do 
			<span class="span_1">Web 
			<span class="span_1">App
		<br><h3>we will be glad to serve you</h3>
		</h1>
	</div>

</body>
</html>