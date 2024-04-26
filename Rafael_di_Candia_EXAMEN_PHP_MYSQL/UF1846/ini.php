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

if (isset($_POST["nombre"], $_POST["email"], $_POST["password"])) {
    // INI archivo.ini
    $host = "localhost";
    $user = "Rafael_erp";
    $password = "Rafaelerp2024";
    $database = "noticias";
    // Conexión
    $conexion = mysqli_connect($host, $user, $password, $database) or die("No se puede conectar con el servidor");

    // Obtener valores del formulario
    $nombre = $_POST["nombre"];
    $user_email = $_POST["email"];
    $user_password = $_POST["password"];

    // Consulta SQL para insertar datos en la tabla usuarios
    $q = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$user_email', '$user_password')";

    // Procedemos a insertar los datos.
    if (mysqli_query($conexion, $q)) {
        // Redirigir a otra página después de insertar los datos
        //header("Location: usuarios.php");
        //exit; // detener la ejecución del script después de redirigir
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }

    $user_email=$_SESSION['email'];
    $consultaUsuario = "SELECT nombre, email FROM usuarios WHERE email = '$user_email'";
    $resultado = mysqli_query($conexion, $consultaUsuario);
    $usuario = mysqli_fetch_assoc($resultado);
    $nombre_usuario = $usuario['nombre'];
    $email_usuario = $usuario['email'];
    echo "<h2>Nombre: $nombre_usuario</h2>";
    echo "<h2>Email: $email_usuario</h2>";
}
?>