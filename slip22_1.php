<!DOCTYPE html>
<html>
<body>

<form method="post">
  <label for="array">Enter an array:</label><br>
  <input type="text" id="array" name="array"><br><br>
  <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $array = $_POST["array"];
  $array = str_replace(" ", "", $array);
  $array = str_replace("'", "\"", $array);
  $array = json_decode($array, true);

  $queue = new SplQueue();

  echo "<form method='post'>";
  echo "<input type='hidden' name='array' value='" . htmlentities(json_encode($array)) . "'>";
  echo "<input type='hidden' name='queue' value='" . htmlentities(serialize($queue)) . "'>";
  echo "<label for='operation'>Select an operation:</label><br>";
  echo "<select id='operation' name='operation'>";
  echo "<option value='insert'>Insert an element in queue</option>";
  echo "<option value='delete'>Delete an element from queue</option>";
  echo "<option value='display'>Display the contents of queue</option>";
  echo "</select><br><br>";
  echo "<input type='submit' value='Submit'>";
  echo "</form>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $array = $_POST["array"];
  $array = json_decode($array, true);
  $queue = unserialize($_POST["queue"]);
  $operation = $_POST["operation"];

  switch ($operation) {
    case "insert":
      $element = array_shift($array);
      $queue->enqueue($element);
      echo "<p>Element inserted in queue: " . $element . "</p>";
      break;
    case "delete":
      if ($queue->isEmpty()) {
        echo "<p>Queue is empty.</p>";
      } else {
        $element = $queue->dequeue();
        echo "<p>Element deleted from queue: " . $element . "</p>";
      }
      break;
    case "display":
      if ($queue->isEmpty()) {
        echo "<p>Queue is empty.</p>";
      } else {
        echo "<p>Contents of queue:</p>";
        echo "<ul>";
        foreach ($queue as $element) {
          echo "<li>" . $element . "</li>";
        }
        echo "</ul>";
      }
      break;
    default:
      echo "<p>Invalid operation selected.</p>";
      break;
  }

  echo "<form method='post'>";
  echo "<input type='hidden' name='array' value='" . htmlentities(json_encode($array)) . "'>";
  echo "<input type='hidden' name='queue' value='" . htmlentities(serialize($queue)) . "'>";
  echo "<label for='operation'>Select an operation:</label><br>";
  echo "<select id='operation' name='operation'>";
  echo "<option value='insert'>Insert an element in queue</option>";
  echo "<option value='delete'>Delete an element from queue</option>";
  echo "<option value='display'>Display the contents of queue</option>";
  echo "</select><br><br>";
  echo "<input type='submit' value='Submit'>";
  echo "</form>";
}
?>

</body>
</html>
