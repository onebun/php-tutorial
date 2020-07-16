<?php session_start(); ?>

<!DOCTYPE html>

<?php
	include 'login-navbar.php';
	
	navigation();
?>

<?php
/*
		login-main
		login-check
		login-protected
		contacts (empty)
		login-logout

		function: navbar()
			echo out the navbar
			if isSet($_SESSION['isLoggedIn'] {
				also include the logout link
			}

		stylesheet

		login-main
			session_start();
			navbar();
			login form
				write in php with heredoc, echo out
				redirect to login-check
			if isSet($_GET["isBlock"])
				echo("<p>You must log in.</p>");
			else if query badUserCredentials
				echo("<p>Wrong username or password. Please try again.</p>");

		login-check
			session_start();
			navbar();
			if credentials correct {
				$_SESSION['isLoggedIn'];
				header('Location: login-protected.php');
				redirect to login-protected.php with session isLoggedIn
			}
			else {
				header('Location: login-main.php?badUserCredentials=true')	
			}

	*/
?>