<!DOCTYPE html>
<html>
<body>

<form method="post">
  <table>
    <tr>
      <th>Serial Number</th>
      <th>Subject Name</th>
      <th>Marks out of 100</th>
    </tr>
    <?php
    for ($i = 1; $i <= 5; $i++) {
      echo "<tr>";
      echo "<td>" . $i . "</td>";
      echo "<td><input type='text' name='subject_name[]'></td>";
      echo "<td><input type='text' name='marks[]'></td>";
      echo "</tr>";
    }
    ?>
  </table>
  <br>
  <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $subject_name = $_POST["subject_name"];
  $marks = $_POST["marks"];

  // Calculate total marks
  $total_marks = array_sum($marks);

  // Calculate percentage
  $percentage = $total_marks / 5;

  // Calculate grade
  if ($percentage >= 90) {
    $grade = "A+";
  } elseif ($percentage >= 80) {
    $grade = "A";
  } elseif ($percentage >= 70) {
    $grade = "B";
  } elseif ($percentage >= 60) {
    $grade = "C";
  } elseif ($percentage >= 50) {
    $grade = "D";
  } else {
    $grade = "F";
  }

  // Display result in tabular format
  echo "<table>";
  echo "<tr><th>Serial Number</th><th>Subject Name</th><th>Marks out of 100</th></tr>";
  for ($i = 0; $i < 5; $i++) {
    echo "<tr>";
    echo "<td>" . ($i + 1) . "</td>";
    echo "<td>" . $subject_name[$i] . "</td>";
    echo "<td>" . $marks[$i] . "</td>";
    echo "</tr>";
  }
  echo "<tr><td colspan='3'>Total Marks: " . $total_marks . "</td></tr>";
  echo "<tr><td colspan='3'>Percentage: " . $percentage . "%</td></tr>";
  echo "<tr><td colspan='3'>Grade: " . $grade . "</td></tr>";
  echo "</table>";
}
?>

</body>
</html>
