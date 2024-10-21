<?php
// Get the input text from the form
$input = $_POST['input'];

// Display the input text
echo "You entered: " . $input;

// Store the input text in a text file
$filename = "input.txt";
file_put_contents($filename, $input);

echo "<br>Text has been stored in $filename.";
?>