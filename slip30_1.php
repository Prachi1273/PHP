<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$cname = readline("Enter the name of the competition: ");

$sql = "SELECT s.name, r.rank FROM Student s, Competition c, Ranking r WHERE s.Stud_id = r.Stud_id AND c.c_no = r.c_no AND c.c_name = '$cname' AND r.rank = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Name</th><th>Rank</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["rank"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No students found for competition $cname.\n";
}

$conn->close();
?>