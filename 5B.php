<?php
session_start();

// Replace 'credentials.txt' with your actual credentials file
$credentialsFile = 'credentials.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Read credentials from the file
    $credentials = file_get_contents($credentialsFile);
    $credentialArray = explode("\n", $credentials);

    foreach ($credentialArray as $line) {
        $parts = explode(':', $line);
        if (count($parts) === 2 && $parts[0] === $username && $parts[1] === $password) {
            $_SESSION['logged_in'] = true;
            header('Location: dashboard.php');
            exit();
        }
    }

    // Invalid credentials
    echo "Invalid username or password.";
}
?>