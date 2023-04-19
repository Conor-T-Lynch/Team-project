<?php
//@reference.geeksforgeeks, (28/12/2020). Available at://https://www.geeksforgeeks.org/how-to-make-a-leaderboard-using-php/

//includes the leaderboard php onto this script so that we dont have to write out the code over and over again
  include_once 'leaderboardheader.php';

?>

<?php
// makes the connection to the database created from PHP MyAdmin
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "project_db";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

$name = $_POST['name'];
$score = $_POST['score'];
//inserts the user name and score into the LeaderBoard table on the database in PHP MyAdmin useing a sql statement
$sql = "INSERT INTO LeaderBoard (Name, Score) VALUES ('$name', '$score')";
$conn->query($sql);
//populates the LeaderBoard table on the website by order of score from highest to lowest using a sql statement
$sql = "SELECT * FROM leaderboard ORDER BY score DESC";
$result = $conn->query($sql);
echo "<font color=white><h1>LeaderBoard</h1>";
echo "<table style ='border: 3px solid white; width: 50%;'>";
echo "<tr style ='border: 3px solid white; width: 50%;'><th style ='border: 3px solid white; width: 50%;'><font color=white>Name</th><th><font color=white>Score</th></tr>";
while($row = $result-> fetch_assoc()){
  echo "<tr style ='border: 3px solid white; width: 50%;'><td style ='border: 3px solid white; width: 50%;'><font color=white>".$row['Name']."</td><td>".
  $row['Score']."</td></tr>";
}

echo "</table>";


$conn -> close();
?>

<?php
//includes the footer php onto this script so that we dont have to write out the code over and over again
  include_once 'footer.php';
?>
