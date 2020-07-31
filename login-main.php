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
		<?php
			if ($_SESSION['signed-in']) { // check if user is already signed in
				echo "You're already logged in!";
				appendLogoutToNav();
			} else { //	--- login form
				$code = <<<EOT
				<form method='post' action='login-check.php'>
					<label for='username'>Your login: </label>
					<input type='text' name='username' id='username'><br>
					<label for='password'>Password: </label>
					<input type='password' name='password'><br><br>
					<input type='submit' value='Submit'><br>
				</form>
				EOT;

				echo $code;
			}
	 	?>

		<p id='notice'></p>
	</body>

	<?php
		if ($_GET['badUserCredentials']) {
			$code = <<<EOT
			<script>
				document.getElementById('notice').innerHTML = 'We were expecting another answer. Give it another try.';
				document.getElementById('username').focus();
			</script>
			EOT;
			echo $code;
		}
	?>


</html>
