<?php
$students = array("Sagar" => "31", "Vicky" => "41", "Leena" => "39", "Ramesh" => "40");

// Ascending order sort by value
asort($students);
echo "<p>Ascending order sort by value:</p>";
echo "<ul>";
foreach ($students as $key => $value) {
  echo "<li>" . $key . " - " . $value . "</li>";
}
echo "</ul>";

// Ascending order sort by key
ksort($students);
echo "<p>Ascending order sort by key:</p>";
echo "<ul>";
foreach ($students as $key => $value) {
  echo "<li>" . $key . " - " . $value . "</li>";
}
echo "</ul>";

// Descending order sorting by value
arsort($students);
echo "<p>Descending order sorting by value:</p>";
echo "<ul>";
foreach ($students as $key => $value) {
  echo "<li>" . $key . " - " . $value . "</li>";
}
echo "</ul>";

// Descending order sorting by key
krsort($students);
echo "<p>Descending order sorting by key:</p>";
echo "<ul>";
foreach ($students as $key => $value) {
  echo "<li>" . $key . " - " . $value . "</li>";
}
echo "</ul>";
?>
