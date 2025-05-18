<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
Enter item to be Search:- <input type=text name=item><br>
<input type=submit name=submit value=Show>

</form>
</body>
</html>

<?php
function SearchItem($value, $array)
  {
      return (array_search($value, $array));
  }
  $array = array(
      "ram",
      "aakash",
      "sapna",
      "mohan",
      "swati"
  );
  $value = $_POST['item'];
echo "Item $value found at position ".SearchItem($value, $array);
?>
