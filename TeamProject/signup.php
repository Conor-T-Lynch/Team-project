<?php
//@reference.Dani Krossing, (11/10/2020), youtube. Available at://www.youtube.com/watch?v=gCo6JqGMi30&ab_channel=DaniKrossing

//includes the header php onto this script so that we dont have to write out the code over and over again
  include_once 'header.php';
?>
<!-- html form for user input to be able to signup on the website -->
<section class="signup-form">
  <h2>Sign Up</h2>
  <div class="signup-form-form">
    <form action="includes/signup.inc.php" method="post">
      <input type="text" name="name" placeholder="Full name...">
      <input type="text" name="email" placeholder="Email...">
      <input type="text" name="uid" placeholder="Username...">
      <input type="password" name="pwd" placeholder="Password...">
      <input type="password" name="pwdrepeat" placeholder="Repeat password...">
      <button type="submit" name="submit">Sign up</button>
    </form>
  </div>
  <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "invaliduid") {
        echo "<p>username must be alphanumeric, cant have any spaces and at least 6-10 characters!</p>";
      }
      else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email!</p>";
      }
      else if ($_GET["error"] == "passwordlength") {
        echo "<p>Password must be at least 6-10 characters!</p>";
      }
      else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Passwords doesn't match!</p>";
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong!</p>";
      }
      else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username or email is already taken!</p>";
      }
      else if ($_GET["error"] == "none") {
        echo "<p>You have signed up!</p>";
      }
    }
  ?>
</section>

<?php
//includes the footer php onto this script so that we dont have to write out the code over and over again
  include_once 'footer.php';
?>
