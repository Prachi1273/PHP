<!DOCTYPE html>
<html>
<body>

<form method="post">
  <label for="string1">Enter a sentence:</label><br>
  <input type="text" id="string1" name="string1"><br>
  <label for="string2">Enter a word:</label><br>
  <input type="text" id="string2" name="string2"><br><br>
  <label for="position">Enter position:</label><br>
  <input type="text" id="position" name="position"><br>
  <label for="num_chars">Enter number of characters to remove:</label><br>
  <input type="text" id="num_chars" name="num_chars"><br><br>
  <label for="insert_position">Enter insert position:</label><br>
  <input type="text" id="insert_position" name="insert_position"><br><br>
  <label for="replace_position">Enter replace position:</label><br>
  <input type="text" id="replace_position" name="replace_position"><br><br>
  <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $string1 = $_POST["string1"];
  $string2 = $_POST["string2"];
  $position = $_POST["position"];
  $num_chars = $_POST["num_chars"];
  $insert_position = $_POST["insert_position"];
  $replace_position = $_POST["replace_position"];

  // Delete a small part from first string after accepting position and number of characters to remove
  $string1 = substr_replace($string1, "", $position, $num_chars);
  echo "<p>String after deleting a small part:</p>";
  echo "<p>" . $string1 . "</p>";

  // Insert the given small string in the given big string at specified position without removing any characters from the big string
  $string1 = substr_replace($string1, $string2, $insert_position, 0);
  echo "<p>String after inserting the given small string:</p>";
  echo "<p>" . $string1 . "</p>";

  // Replace some characters/ words from given big string with the given small string at specified position
  $string1 = substr_replace($string1, $string2, $replace_position, strlen($string2));
  echo "<p>String after replacing some characters/words:</p>";
  echo "<p>" . $string1 . "</p>";
}
?>

</body>
</html>
