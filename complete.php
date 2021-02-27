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

$sql = "DELETE FROM List WHERE URN=\"" . $_GET["complete"] . "\"";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<meta http-equiv=\"refresh\" content=\"0; view.php\"/>";

$conn->close();
?>