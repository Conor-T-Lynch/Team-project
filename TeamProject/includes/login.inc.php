<?php

//@reference.Dani Krossing, (11/10/2020), youtube. Available at://www.youtube.com/watch?v=gCo6JqGMi30&ab_channel=DaniKrossing

if (isset($_POST["submit"])) {

  // get the form data from the URL
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];

  // run a bunch of error handlers to catch any user mistakes
  // These functions can be found in functions.inc.php

  require_once "db.inc.php";
  require_once 'functions.inc.php';

  // Left inputs empty
  if (emptyInputLogin($username, $pwd) === true) {
    header("location: ../login.php?error=emptyinput");
		exit();
  }

  // no user errors upto this point

  // logs in the user
  loginUser($conn, $username, $pwd);

} else {
	header("location: ../login.php");
    exit();
}
?>
