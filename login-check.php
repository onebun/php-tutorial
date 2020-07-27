<!DOCTYPE html>

<html lang="en-us">
	<head>
		<meta charset="utf-8">
	</head>
</html>

<?php
  session_start();
  echo '<script>alert("made it to the start of the script o_O!")</script>';
  $name = $password = '';
  $myusername = 'a'; //arbitrary credentials, come back later, make user-defined
  $mypassword = 'b';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') { //check data was posted
    $name = test_input($_POST['username']); //make input safe
    $password = test_input($_POST['password']);

    if ($name == $myusername && password == $mypassword) { //check if credentials match up
      $_SESSION['signed-in'] = true;
      echo '<script>alert("login success!")</script>';
      header('Location: login-protected.php');
    }
    else {
      echo '<script>alert("login fail")</script>';
      header('Location: login-main.php?badUserCredentials=true');
    }
  }

//Function - make input safe
// trim() - remove whitespace
// stripslashes() - remove slashes
// htmlspecialchars() - convert special characters to html entities (won't be compiled as code)
  function test_input($data) {
    trim($data);
    stripslashes($data);
    htmlspecialchars($data);
    return $data;
  }

?>
