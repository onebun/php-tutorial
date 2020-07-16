<?php session_start(); ?>

<!DOCTYPE html>

<html lang="us-eng">
	<head>
		<meta charset="utf-8">
	</head>

	<body>
		<ul id="NavigationBar">
			<li> <a href="#">Home</a></li>
			<li> <a href="#">Protected</a></li>
			<li> <a href="#">Contact</a></li>
		</ul>

		<script>
//			document.getElementById("NavigationBar").innerHTML += `<li><a href="#">Log Out</a></li>`;

			var node = document.createElement("li");
			const linknode = `<a href="#">Log Out</a>`;
			node.innerHTML = linknode;
			console.log(node);
			document.getElementById("NavigationBar").innerHTML += node;
			console.log(document.getElementById("NavigationBar").innerHTML);
		</script>

		
	</body>
</html>