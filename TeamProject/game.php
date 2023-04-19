<?php
//@reference.Dani Krossing, (11/10/2020), youtube. Available at://www.youtube.com/watch?v=gCo6JqGMi30&ab_channel=DaniKrossing

//includes the gameheader php onto this script so that we dont have to write out the code over and over again
  include_once 'gameheader.php';
?>
<!--img tag for videogame page video game image-->
<img align = "left" src="img/ImmortalRoad.png" height="500" width="1100" alt="Games"></a>
<br>
<h1 align = "center" style="font-size: 20px;">
  <p style="color: white;">
    Get immersed in our hack and slash horde style video game, spanning three different areas, from mountains to snow castles and underground lava pits, each area will be different from the last and offer a more difficult challange. Fight a variety of monsters to add ponts to your score and most importantly to stay alive so that you can be the top scorer on our Leaderboard. We hope that you enjoy playing our game as much as we enjoyed creating it, click the link below in blue and try out our game! have fun and top that leaderboard.
  </p>
</h1>
<h1 style="font-size: 30px;">
  <!-- link to our game on the unity website by using webGL -->
  <a style="color: blue; display:block;text-align:center" href="https://play.unity.com/p/immortalroadwebgl/edit">Immortal Road</a>
</h1>
<div class="row">
    <div class="col-lg-6 mx-auto">
<h1 align = "center" style="color: white; font-size: 25px;">
  Add your name & score to our leaderboard
</h1><br>
<h4 style="color: white;">
    <!--html form for user input to add player name and score which then posts to the leaderboard PHP script using the action attribute-->
<form class = "signup-form-form" method = "post" action = "LeaderBoard.php">
  <label> Name: </label>
  <input type = "test" name = "name"><br>
  <label> Score: </label>
  <input type = "number" name = "score"><br>
  <input type = "submit" value = "submit">
</form>
</h4>
</div>
<?php
//includes the footer php onto this script so that we dont have to write out the code over and over again
  include_once 'footer.php';
?>
