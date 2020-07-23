<?php
	function navList() {
		$code = <<<EOT
		<ul id=NavigationBar>
			<li> <a href="login-main.php">Home</a></li>
			<li> <a href="login-protected.php">Protected</a></li>
			<li> <a href="#">Contact</a></li>
		</ul>
		EOT;

		echo $code;
	}

	function appendLogoutToNav() {
		$code = <<<EOT
		<script>
			document.getElementById('NavigationBar').innerHTML += "<li> <a href='login-logout.php'>Log Out</a></li>";
		</script>
		EOT;

		echo $code;
	}
?>
