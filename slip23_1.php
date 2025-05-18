
<?php
$stack = [];

while (true) {
    echo "Select an operation:\n";
    echo "1. Insert an element in stack\n";
    echo "2. Delete an element from stack\n";
    echo "3. Display the contents of stack\n";
    echo "4. Exit\n";

    $choice = readline("Enter your choice: ");

    if ($choice == 1) {
        $element = readline("Enter an element to insert: ");
        array_push($stack, $element);
        echo "Element inserted in stack: $element\n";
    } elseif ($choice == 2) {
        if (count($stack) == 0) {
            echo "Stack is empty.\n";
        } else {
            $element = array_pop($stack);
            echo "Element deleted from stack: $element\n";
        }
    } elseif ($choice == 3) {
        if (count($stack) == 0) {
            echo "Stack is empty.\n";
        } else {
            echo "Contents of stack:\n";
            foreach (array_reverse($stack) as $element) {
                echo "$element\n";
            }
        }
    } elseif ($choice == 4) {
        break;
    } else {
        echo "Invalid choice.\n";
    }
}
?>