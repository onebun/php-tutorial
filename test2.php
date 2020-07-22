<?php session_start(); ?>

<!DOCTYPE html>

<html lang="us-eng">
	<head>
		<meta charset="utf-8">
	</head>

	<body>
		<?php
			function navList() {
				$code = <<<EOT
				<ul id=NavigationBar>
					<li> <a href="#">Home</a></li>
					<li> <a href="#">Protected</a></li>
					<li> <a href="#">Contact</a></li>
				</ul>
				EOT;
				//alert("hello navList");
				echo $code;
			}

			function appendLogoutToNav() {
				$code = <<<EOT
				<script>
					document.getElementById('NavigationBar').innerHTML += "<li> <a href='#'>Log Out</a></li>";
				</script>
				EOT;
				echo $code;
			}

			navList();
			appendLogoutToNav();
		?>
	</body>
</html>
