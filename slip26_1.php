<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$hname = readline("Enter the name of the hospital: ");

$sql = "SELECT dname, address, city, area FROM Doctor WHERE hosp_no IN (SELECT hosp_no FROM Hospital WHERE hname = '$hname')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Doctor Name</th><th>Address</th><th>City</th><th>Area</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["dname"] . "</td><td>" . $row["address"] . "</td><td>" . $row["city"] . "</td><td>" . $row["area"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No doctors found for hospital $hname.\n";
}

$conn->close();
?>
