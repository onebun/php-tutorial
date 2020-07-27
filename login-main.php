<!DOCTYPE html>

<?php
	session_start();
	include 'login-navbar.php';
	navList();
?>

<html lang="en-us">

	<head>
		<title>Welcome. Please log in.</title>
		<meta charset="utf-8">
	</head>

	<body>
		<form method='post' action='login-check.php'>
			<label for='username'>Your login: </label>
			<input type='text' name='username'><br>
			<label for='password'>Password: </label>
			<input type='password' name='password'><br><br>
			<input type='submit' value='Submit'><br>
		</form>

		<p id='notice'></p>
	</body>

	<?php
		if ($_GET['badUserCredentials']) {
			$code = <<<EOT
			<script>document.getElementById('notice').innerHTML = 'We were expecting another answer. Give it another try.';</script>
			EOT;
			echo $code;
		}
	?>


</html>
