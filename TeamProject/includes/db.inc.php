<?php

//@reference.Dani Krossing, (11/10/2020), youtube. Available at://www.youtube.com/watch?v=gCo6JqGMi30&ab_channel=DaniKrossing

// makes the connection to the database created from PHP MyAdmin
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "project_db";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
?>
