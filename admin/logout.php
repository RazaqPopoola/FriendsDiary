<?php
	//Start session
	session_start();
	
	// Delete username
	unset($_SESSION['username']);
	
	//sesssion_destroy(); //This will delete all of the session keys

	header('Location: login.php');

?>