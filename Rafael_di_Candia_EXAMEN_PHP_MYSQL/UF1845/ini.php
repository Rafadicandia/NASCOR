<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $user_email = $_POST['email'];
    if (!empty($user_email)) {
        $_SESSION['email'] = $user_email;
        echo "<h1>Bienvenido!</h1>";
    } else {
        header("Location: login.php");
        session_destroy();
    }
}
