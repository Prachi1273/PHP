<?php
$filename1 = readline("Enter the name of the first file: ");
$filename2 = readline("Enter the name of the second file: ");

$content = file_get_contents($filename1);
file_put_contents($filename2, $content);

echo "Content of $filename1 copied to $filename2.\n";
?>
