<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = readline("Enter the title of the event: ");

$sql = "UPDATE Committee SET status = 'working' WHERE cno IN (SELECT cno FROM Event_Committee WHERE eno IN (SELECT eno FROM Event WHERE title = '$title'))";
$result = $conn->query($sql);

if ($conn->affected_rows > 0) {
    echo "Status of committee updated to working.\n";
} else {
    echo "No committees found for event $title.\n";
}

$conn->close();
?>