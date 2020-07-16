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

				echo $code;
			}

			function appendLogoutToNav() {
				$code = <<<EOT
				<script>
					var node = document.createlement("li");
					const linknode = '<a href="#">Log Out</a>';
					node.innerHTML = linknode;
					document.getElementById("NavigationBar").appendChild(node);
				</script>
				EOT;
				echo $code;
			}

			navList();
			appendLogoutToNav();
		?>
	</body>
</html>