
<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operation = $_POST["operation"];

function find_sum($num1, $num2) {
  return $num1 + $num2;
}

function find_difference($num1, $num2) {
  return $num1 - $num2;
}

function find_product($num1, $num2) {
  return $num1 * $num2;
}

function find_quotient($num1, $num2) {
  return $num1 / $num2;
}

switch ($operation) {
  case "add":
    $result = find_sum($num1, $num2);
    break;
  case "sub":
    $result = find_difference($num1, $num2);
    break;
  case "mul":
    $result = find_product($num1, $num2);
    break;
  case "div":
    $result = find_quotient($num1, $num2);
    break;
  default:
    $result = "Invalid operation";
    break;
}

echo "The result of the operation is: " . $result;
?>

