<?php 

	session_start();

	if (isset($_SESSION['uname'])) {
		echo "<h2>Welcome to Home ". $_SESSION['uname']. "</h2>";

		
		echo "<a href='nav.php'>Information</a><br>";
        echo "<a href='load.php'>Details</a><br>";
        echo "<a href='register.php'>register</a><br>";
        echo "<a href='upload.php'>Home</a><br>";
        echo "<a href='logout.php'>Logout</a><br>";
        echo "<a href='welcome.php'>Welcome to home</a><br>";
		
		
	}else{
		header("location:login.php");
	}

 ?>