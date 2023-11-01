<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform server-side authentication and validation here
    if ($username === "user1" && $password === "pass") {
        $_SESSION["loggedIn"] = true;
        header("Location: home.html");
        exit;
    } else {
        $errorMessage = "Invalid username or password. Please try again.";
    }
}
?>