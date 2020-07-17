<!DOCTYPE html>
		
		<script>
			function 
			create a ul  that can be called on each page
			
						var nav = document.getElementById("Navigation");
						var ul = document.getElementById("UnorderedList");
						var a = document.createElement("a");
						var linkText = document.createTextNode("Log Out");
						var li = document.createElement("li");
						a.href = "login-logout.php";
						a.appendChild(linkText);
						li.appendChild(link);
						ul.appendChild(li);
						//nav.appendChild(ul);
						alert(ul.innerHTML);
					</script>
			}

<?php
/*			function navigation() {
				$
				<nav id="Navigation">
					<ul id="UnorderedList">
						<li><a href="login-main.php">Home</a></li>
						<li><a href="login-protected.php">Protected Page</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</nav>
			//	$navBar = <<<NAVBAR
			//		<nav id="Navigation">
			//			<ul id="UnorderedList">
			//				<li><a href="login-main.php">Home</a></li>
			//				<li><a href="login-protected.php">Protected Page</a></li>
			//				<li><a href="#">Contact</a></li>
			//			</ul>
			//		</nav>
			//	NAVBAR;
			
				$logoutBar = <<<LOGOUTBAR
					
				LOGOUTBAR;

				


				$_SESSION['isLoggedIn'] = true;
				if (isset($_SESSION['isLoggedIn'])) {
					echo $logoutBar; 
				}
			}
*/

			/*
			echo out some html
				the html now exists
			echo out a script
				adds to the html
				should change dynamically and be reflected on the page


			php function - call it whenever I want

			will have to include on every page anyway
				is almost like calling a function
				therefore including everything within this php function is not necessary
				I can write out the main nav html prior to defining the function.
				Downside is, I will have to place the include carefully
					(in this case, placing it in the beginning works because I want the menu to go on top)
				So there is an upside to writing it all in a function
					(encapsulation, for future use)

			*/
		?>