<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm-password'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm-password'];

        if ($password === $confirmPassword) {
            echo 'Sign up successful!';
        } else {
            echo 'Passwords do not match.';
        }
    } else {
        echo 'All form fields are required.';
    }
} else {
    echo 'Invalid request method.';
}
?>
