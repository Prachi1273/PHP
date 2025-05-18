<?php
$filename = readline("Enter the name of the file: ");

if (!file_exists($filename)) {
    echo "File does not exist.\n";
} else {
    echo "Select an operation:\n";
    echo "1. Display type of file\n";
    echo "2. Display last modification time of file\n";
    echo "3. Display the size of file\n";
    echo "4. Delete the file\n";

    $choice = readline("Enter your choice: ");

    switch ($choice) {
        case 1:
            $type = mime_content_type($filename);
            echo "Type of file: $type\n";
            break;
        case 2:
            $time = filemtime($filename);
            echo "Last modification time of file: " . date("Y-m-d H:i:s", $time) . "\n";
            break;
        case 3:
            $size = filesize($filename);
            echo "Size of file: $size bytes\n";
            break;
        case 4:
            unlink($filename);
            echo "File deleted.\n";
            break;
        default:
            echo "Invalid choice.\n";
            break;
    }
}

?>