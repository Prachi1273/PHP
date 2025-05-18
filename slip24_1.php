<?php
$filename1 = readline("Enter the name of the first file: ");
$filename2 = readline("Enter the name of the second file: ");

$content = file_get_contents($filename1);
file_put_contents($filename2, $content, FILE_APPEND);

echo "Content of $filename1 appended to $filename2.\n";
?>
