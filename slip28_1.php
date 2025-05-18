<?php
$filename = "student.dat";

if (!file_exists($filename)) {
    echo "File does not exist.\n";
} else {
    $lines = file($filename, FILE_IGNORE_NEW_LINES);
    $students = [];

    foreach ($lines as $line) {
        $fields = explode(",", $line);
        $rollno = $fields[0];
        $name = $fields[1];
        $os = $fields[2];
        $wt = $fields[3];
        $ds = $fields[4];
        $python = $fields[5];
        $java = $fields[6];
        $cn = $fields[7];

        $total = $os + $wt + $ds + $python + $java + $cn;
        $percentage = $total / 6.0;

        $students[] = [
            "rollno" => $rollno,
            "name" => $name,
            "os" => $os,
            "wt" => $wt,
            "ds" => $ds,
            "python" => $python,
            "java" => $java,
            "cn" => $cn,
            "total" => $total,
            "percentage" => $percentage
        ];
    }

    echo "<table>";
    echo "<tr><th>Roll No.</th><th>Name</th><th>OS</th><th>WT</th><th>DS</th><th>Python</th><th>Java</th><th>CN</th><th>Total</th><th>Percentage</th></tr>";
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student["rollno"] . "</td>";
        echo "<td>" . $student["name"] . "</td>";
        echo "<td>" . $student["os"] . "</td>";
        echo "<td>" . $student["wt"] . "</td>";
        echo "<td>" . $student["ds"] . "</td>";
        echo "<td>" . $student["python"] . "</td>";
        echo "<td>" . $student["java"] . "</td>";
        echo "<td>" . $student["cn"] . "</td>";
        echo "<td>" . $student["total"] . "</td>";
        echo "<td>" . $student["percentage"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
