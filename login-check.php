
<?php
  session_start();

  echo '<script>console.log("login-check.php, start of script");</script>';
  $name = $password = '';
  $myusername = 'a'; //arbitrary credentials, come back later, make user-defined
  $mypassword = 'a';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') { //check data was posted
    $name = test_input($_POST['username']); //make input safe
    $pass = test_input($_POST['password']);
    if ($name == $myusername && $pass == $mypassword) { //check if credentials match up
      $_SESSION['signed-in'] = true;
      echo '<script>alert("login success!");</script>';
      header('Location: login-protected.php');
    }
    else {
      echo '<script>alert("login fail");</script>';
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
