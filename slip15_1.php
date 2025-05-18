<!DOCTYPE html>
<html>
<body>

<form method="post">
  <label for="string">Enter a string:</label><br>
  <input type="text" id="string" name="string"><br><br>
  <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $string = $_POST["string"];

  // Select first 5 words from the string
  $words = explode(" ", $string);
  $first_five_words = implode(" ", array_slice($words, 0, 5));
  echo "<p>First 5 words: " . $first_five_words . "</p>";

  // Convert the given string to lowercase and then to Title case
  $lowercase = strtolower($string);
  $titlecase = ucwords($lowercase);
  echo "<p>Title case: " . $titlecase . "</p>";

  // Pad the given string with “*” from left and right both the sides
  $padded_string = str_pad($string, strlen($string) + 2, "*", STR_PAD_BOTH);
  echo "<p>Padded string: " . $padded_string . "</p>";

  // Remove the leading whitespaces from the given string
  $trimmed_string = ltrim($string);
  echo "<p>Trimmed string: " . $trimmed_string . "</p>";

  // Find the reverse of given string
  $reversed_string = strrev($string);
  echo "<p>Reversed string: " . $reversed_string . "</p>";
}
?>

</body>
</html>
