<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if (isset($_GET['email']) && isset($_GET['password'])) {
        $email = $_GET['email'];
        $password = $_GET['password'];

        if ($email === 'example@example.com' && $password === 'password') {
            echo 'Login successful!';
        } else {
            echo 'Invalid email or password.';
        }
    } else {
        echo 'Email and password are required.';
    }
} else {
    echo 'Invalid request method.';
}
