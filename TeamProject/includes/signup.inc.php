<?php

//@reference.Dani Krossing, (11/10/2020), youtube. Available at://www.youtube.com/watch?v=gCo6JqGMi30&ab_channel=DaniKrossing

if (isset($_POST["submit"])) {

  // get the form data from the URL
  $name = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];


  // run error handlers to catch any user mistakes
  // These functions can be found in functions.inc.php

  require_once "db.inc.php";
  require_once 'functions.inc.php';

  // Left inputs empty
  if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=emptyinput");
		exit();
  }
	// Proper username chosen
  if (invalidUid($username) !== false) {
    header("location: ../signup.php?error=invaliduid");
		exit();
  }
  // Proper email chosen
  if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalidemail");
		exit();
  }
  // Length of the password?
  if (pwdLength($pwd) !== false) {
    header("location: ../signup.php?error=passwordlength");
		exit();
  }
  // Do the two passwords match?
  if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=passwordsdontmatch");
		exit();
  }
  // Is the username taken already
  if (uidExists($conn, $username) !== false) {
    header("location: ../signup.php?error=usernametaken");
		exit();
  }

  if (emailExists($conn, $email) !== false) {
    header("location: ../signup.php?error=usernametaken");
		exit();
  }

  // no user errors upto this point

  // insert user into the database
  createUser($conn, $name, $email, $username, $pwd);

} else {
	header("location: ../signup.php");
    exit();
}
?>
