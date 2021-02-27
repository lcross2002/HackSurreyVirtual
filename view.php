<link rel="stylesheet" href="main.css">
<?php

date_default_timezone_set("Europe/London");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM List";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<h1>Tasks: <br></h1>";
  while($row = $result->fetch_assoc()) {
    echo "<div><p>Name: ". $row["List_Title"] . "</p>";
    echo "<p>Description: " . $row["List_Description"] . "</p>";
    echo "<p>Start Time: " . $row["List_StartTime"] . "</p>";
    echo "<p>End Time: " . $row["List_EndTime"] . "</p>";
    echo "<form action=\"complete.php\" method=\"GET\">	<input type=\"submit\" value=" . $row["URN"] . " name=\"complete\"> </form>";
    echo "</div>";
    echo "<br></br>";
  }
} else {
  echo "<p>0 results found</p>";
}

echo "<form action=\"main.html\" method=\"GET\">	<input type=\"submit\" value=\"Go Back\"> </form>";

mysqli_free_result($result);

$conn->close();
?>