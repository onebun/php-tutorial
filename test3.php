<?php session_start(); ?>

<!DOCTYPE html>

<html lang="us-eng">
	<head>
		<meta charset="utf-8">
	</head>


	<body>

		<ul id=NavigationBar>
			<li> <a href="#">Home</a></li>
			<li> <a href="#">Protected</a></li>
			<li> <a href="#">Contact</a></li>
		</ul>
    <p onclick="myFunction()">Mouse over me!</p>



	</body>
  <script>
    function myFunction() {
      document.getElementById("NavigationBar").innerHTML += "<li> <a href='#''>Log Out</a></li>";
    }
  </script>
</html>
