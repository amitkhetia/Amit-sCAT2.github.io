<?php
require_once('conn.php');
if (isset($_POST['submit'])) {
	$user=$_POST['username'];
	$pass1=sha1($_POST['pass2']);

	$update="UPDATE 6470users SET PASSWORD_HASH='$pass1' WHERE USERNAME = '$user'";
	$check="SELECT * FROM 6470users WHERE USERNAME = '$user'";
	$result = mysqli_query($conn,$check);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
    	 
    		mysqli_query($conn,$update);
    		$success="Password changing was successful";
    		echo $success;
    	
    } else {
    	$error="Incorrect username or password";
    	echo $error;
    }


}
?>