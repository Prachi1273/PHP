<!DOCTYPE html>
<html>
<head>
  <title>Chess Board</title>
  <style>
    table {
      border-collapse: collapse;
    }
    td {
      width: 50px;
      height: 50px;
    }
    .white {
      background-color: white;
    }
    .black {
      background-color: black;
    }
  </style>
</head>
<body>

<table>
  <?php
  for ($i = 0; $i < 8; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 8; $j++) {
      if (($i + $j) % 2 == 0) {
        echo "<td class='white'></td>";
      } else {
        echo "<td class='black'></td>";
      }
    }
    echo "</tr>";
  }
  ?>
</table>

</body>
</html>
