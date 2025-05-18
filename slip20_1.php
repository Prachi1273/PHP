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
  echo "<option value='split'>Split an array into chunks</option>";
  echo "<option value='sort'>Sort the array by values without changing the keys</option>";
  echo "<option value='filter'>Filter the even elements from an array</option>";
  echo "</select><br><br>";
  echo "<input type='submit' value='Submit'>";
  echo "</form>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $array = $_POST["array"];
  $array = json_decode($array, true);
  $operation = $_POST["operation"];

  switch ($operation) {
    case "split":
      $chunks = array_chunk($array, 2, true);
      echo "<p>Array split into chunks:</p>";
      echo "<ul>";
      foreach ($chunks as $chunk) {
        echo "<li>";
        echo "<ul>";
        foreach ($chunk as $key => $value) {
          echo "<li>" . $key . " - " . $value . "</li>";
        }
        echo "</ul>";
        echo "</li>";
      }
      echo "</ul>";
      break;
    case "sort":
      asort($array);
      echo "<p>Array sorted by values without changing the keys:</p>";
      echo "<ul>";
      foreach ($array as $key => $value) {
        echo "<li>" . $key . " - " . $value . "</li>";
      }
      echo "</ul>";
      break;
    case "filter":
      $even_elements = array_filter($array, function($value) {
        return $value % 2 == 0;
      });
      echo "<p>Even elements filtered from the array:</p>";
      echo "<ul>";
      foreach ($even_elements as $key => $value) {
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
