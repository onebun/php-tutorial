<?php session_start(); ?>

<!DOCTYPE html>

<?php
	include 'login-navbar.php';
	navList();
?>

<html lang="en-us">

	<head>
		<title>Welcome. Please log in.</title>
		<meta charset="utf-8">
	</head>

	<body>
		<form action='login-check.php' method='post'>
			<label for='username'>Your login: </label>
			<input type='text' id='username' name='username'><br>
			<label for='password'>Password: </label>
			<input type='text' id='password' name='password'><br><br>
			<input type='submit' value='Submit'>
		</form>


	</body>

</html>
