<?php
//@reference.Dani Krossing, (11/10/2020), youtube. Available at://www.youtube.com/watch?v=gCo6JqGMi30&ab_channel=DaniKrossing

//logs out user and bring user back to the index page
session_start();
session_unset();
session_destroy();

header("location: index.php");
exit();
