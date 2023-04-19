<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"
<!--Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CKC Interactive Games</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <Body background = "img/bgImg.jpg">
    <!--navigation-->
    <nav>
      <div class="wrapper">
        <!--img tag for a basic logo image in the header of the webpage-->
        <img src="img/gamelogo.png" alt="Games"></a>
        <ul>
          <!--anchor tag for a link back to the game.php page-->
          <li><a href="game.php">Return To Game</a></li>
          <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li><a href='logout.php'>Logout</a></li>";
            }
            else {
              echo "<li><a href='signup.php'>Sign up</a></li>";
              echo "<li><a href='login.php'>Log in</a></li>";
            }
          ?>
        </ul>
      </div>
    </nav>

<!--wrapper to align the content (ends in footer.php)-->
<div class="wrapper">
