<!DOCTYPE html>

<html lang="en-us">
	<head>
		<title>Logging out...</title>
		<meta charset="utf-8">
	</head>
</html>

<?php
  session_start();
  include 'login-navbar.php';
  navList();

  if (!$_SESSION['signed-in']) { //
  } else {
    session_destroy();
    echo "Logout success!<br><br>Redirecting you in a moment..." ;
  }

  header('Refresh: 5; login-main.php');
?>
