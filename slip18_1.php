<!DOCTYPE html>
<html>
<body>

<form method="post">
  <label for="array">Enter an associative array:</label><br>
  <input type="text" id="array" name="array"><br><br>
  <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $array = $_POST["array"];
  $array = str_replace(" ", "", $array);
  $array = str_replace("'", "\"", $array);
  $array = json_decode($array, true);

  echo "<p>Original array:</p>";
  echo "<ul>";
  foreach ($array as $key => $value) {
    echo "<li>" . $key . " - " . $value . "</li>";
  }
  echo "</ul>";

  echo "<form method='post'>";
  echo "<input type='hidden' name='array' value='" . htmlentities(json_encode($array)) . "'>";
  echo "<label for='operation'>Select an operation:</label><br>";
  echo "<select id='operation' name='operation'>";
  echo "<option value='reverse'>Reverse the order of each element’s key-value pair</option>";
  echo "<option value='random'>Traverse the element in an array in random order</option>";
  echo "<option value='variables'>Convert the array elements into individual variables</option>";
  echo "<option value='display'>Display the elements of an array along with key</option>";
  echo "</select><br><br>";
  echo "<input type='submit' value='Submit'>";
  echo "</form>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $array = $_POST["array"];
  $array = json_decode($array, true);
  $operation = $_POST["operation"];

  switch ($operation) {
    case "reverse":
      $array = array_flip($array);
      echo "<p>Array with reversed order of key-value pairs:</p>";
      echo "<ul>";
      foreach ($array as $key => $value) {
        echo "<li>" . $key . " - " . $value . "</li>";
      }
      echo "</ul>";
      break;
    case "random":
      shuffle($array);
      echo "<p>Array with elements traversed in random order:</p>";
      echo "<ul>";
      foreach ($array as $key => $value) {
        echo "<li>" . $key . " - " . $value . "</li>";
      }
      echo "</ul>";
      break;
    case "variables":
      extract($array);
      echo "<p>Array elements converted into individual variables:</p>";
      echo "<ul>";
      echo "<li>" . $name . "</li>";
      echo "<li>" . $age . "</li>";
      echo "<li>" . $gender . "</li>";
      echo "</ul>";
      break;
    case "display":
      echo "<p>Array elements along with key:</p>";
      echo "<ul>";
      foreach ($array as $key => $value) {
        echo "<li>" . $key . " - " . $value . "</li>";
      }
      echo "</ul>";
      break;
    default:
      echo "<p>Invalid operation selected.</p>";
      break;
  }
}
?>

</body>
</html>
