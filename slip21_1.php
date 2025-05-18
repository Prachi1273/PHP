<?php
$temperatures = array(60, 62, 65, 68, 70, 72, 75, 78, 80, 82, 85, 88, 90, 92, 95);

echo "<p>Array of high temperatures:</p>";
echo "<ul>";
foreach ($temperatures as $temperature) {
  echo "<li>" . $temperature . "</li>";
}
echo "</ul>";

$average = array_sum($temperatures) / count($temperatures);
echo "<p>Average high temperature: " . $average . "</p>";

rsort($temperatures);
$warmest = array_slice($temperatures, 0, 5);
echo "<p>Five warmest high temperatures:</p>";
echo "<ul>";
foreach ($warmest as $temperature) {
  echo "<li>" . $temperature . "</li>";
}
echo "</ul>";
?>
