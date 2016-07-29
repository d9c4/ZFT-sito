<?php
	session_start();
	if(isset($_SESSION["logged"])) {
		echo "Ciao ".$_SESSION["user"]."<br>";
		echo "<a href='logout.php'>Logout</a>";
	} else {
		echo "NON SEI LOGGATO<br>";
		echo "<a href='login.php'>Login</a>";
	}
?>