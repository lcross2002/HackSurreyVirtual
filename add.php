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

$title = $_GET["title"];
$description = $_GET["description"];
$dateTime = $_GET["EndTime"];
$date = substr($dateTime, 0, 10);
$time = substr($dateTime, 11, 5);

$sql = "INSERT INTO List (List_Title, List_Description, List_StartTime, List_EndTime) VALUES (\"" . $title . "\", \"" . $description . "\", \"" . date('Y-m-d H:i:s') . "\", \"". $date. " " . $time . ":00" ."\")";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<meta http-equiv=\"refresh\" content=\"0; main.html\"/>";

$conn->close();
?>