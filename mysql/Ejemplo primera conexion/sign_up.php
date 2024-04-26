<?php
if (isset($_POST["user_name"], $_POST["user_email"], $_POST["password"])) {
    // INI archivo.ini
    $host = "localhost";
    $user = "Rafael_erp";
    $password = "Rafaelerp2024";
    $database = "noticias";
    // Conexión
    $conexion = mysqli_connect($host, $user, $password, $database) or die ("No se puede conectar con el servidor");
    
    // Obtener valores del formulario
    $nombre = $_POST["user_name"];
    $email = $_POST["user_email"];
    $password = $_POST["password"];

    // Consulta SQL para insertar datos en la tabla usuarios
    $q = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";
    
    // Procedemos a insertar los datos.
    if(mysqli_query($conexion, $q)) {
        // Redirigir a otra página después de insertar los datos
        header("Location: tablanoticias.php");
        exit; // Importante: detener la ejecución del script después de redirigir
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./styles_login.css">

</head>

<body class="align">

    <div class="grid">

        <form action="sign_up.php" method="POST" class="form login">

            <div class="form__field">
                <label for="sign_up_user_name"><svg class="icon">
                        <use xlink:href="#icon-user"></use>
                    </svg><span class="hidden">User_name</span></label>
                <input autocomplete="user_name" id="sign_up_user_name" type="text" name="user_name" class="form__input"
                    placeholder="User_name" required>
            </div>
            <div class="form__field">
                <label for="login__user_email"><svg class="icon">
                        <use xlink:href="#icon-user"></use>
                    </svg><span class="hidden">User_email</span></label>
                <input autocomplete="user_email" id="login__user_email" type="text" name="user_email" class="form__input"
                    placeholder="User_email" required>
            </div>

            <div class="form__field">
                <label for="login__password"><svg class="icon">
                        <use xlink:href="#icon-lock"></use>
                    </svg><span class="hidden">Password</span></label>
                <input id="login__password" type="password" name="password" class="form__input" placeholder="Password"
                    required>
            </div>

            <div class="form__field">
                <input type="submit" name="sign_up" value="Sign Up and Log In">
            </div>

        </form>

    </div>

    <svg xmlns="http://www.w3.org/2000/svg" class="icons">
        <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
            <path
                d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
        </symbol>
        <symbol id="icon-lock" viewBox="0 0 1792 1792">
            <path
                d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
        </symbol>
        <symbol id="icon-user" viewBox="0 0 1792 1792">
            <path
