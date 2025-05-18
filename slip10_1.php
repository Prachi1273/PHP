<!DOCTYPE html>
<html>
<body>

<form method="post">
  <label for="num1">Enter first number:</label><br>
  <input type="text" id="num1" name="num1"><br>
  <label for="num2">Enter second number:</label><br>
  <input type="text" id="num2" name="num2"><br><br>
  <input type="submit" value="Submit">
</form>

<?php
function find_mod($num1, $num2) {
  return $num1 % $num2;
}

function find_power($num1, $num2) {
  return pow($num1, $num2);
}

function find_sum($num1) {
  $sum = 0;
  for ($i = 1; $i <= $num1; $i++) {
    $sum += $i;
  }
  return $sum;
}

function find_factorial($num2) {
  $factorial = 1;
  for ($i = 1; $i <= $num2; $i++) {
    $factorial *= $i;
  }
  return $factorial;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];

  echo "Mod of the two numbers is: " . find_mod($num1, $num2) . "<br>";
  echo "Power of first number raised to the second is: " . find_power($num1, $num2) . "<br>";
  echo "Sum of first n numbers is: " . find_sum($num1) . "<br>";
  echo "Factorial of second number is: " . find_factorial($num2) . "<br>";
}
?>

</body>
</html>
