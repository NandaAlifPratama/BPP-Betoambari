<?php

session_start();


$validUsername = "admin";
$validPassword = "password123";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    
    if ($username === $validUsername && $password === $validPassword) {
        
        $_SESSION['admin_logged_in'] = true;

        
        header("Location: admin-dashboard.php");
        exit();
    } else {
        
        header("Location: admin-login.html?error=invalid_credentials");
        exit();
    }
} else {
   
    header("Location: admin-login.html");
    exit();
}
?>