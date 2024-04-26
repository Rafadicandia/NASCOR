<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["password"]) && isset($_POST['user_email'])) {
    $user_password = $_POST['password'];
    $user_email = $_POST['user_email'];
    $_SESSION['user_email'] = $user_email;
    $_SESSION['password'] = $user_password;

}
function user($user_email, $user_password)
{
    // INI archivo.ini
    $host = "localhost";
    $user = "Rafael_erp";
    $password = "Rafaelerp2024";
    $database = "noticias";
    // Conexión
    $conexion = mysqli_connect($host, $user, $password, $database) or die("No se puede conectar con el servidor");

    ;
    // Consulta SQL para verificar la existencia del usuario
    $q = "SELECT * FROM usuarios WHERE email='$user_email' AND password='$user_password'";

    // Ejecutamos la consulta
    $resultado = mysqli_query($conexion, $q);

    // Verificamos si se encontró algún resultado
    if (mysqli_num_rows($resultado) > 0) {
        return true; // El usuario existe en la base de datos
    } else {
        return false; // El usuario no existe en la base de datos
    }
}

if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: login.php");
    exit;
}

?>