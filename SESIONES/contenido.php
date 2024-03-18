<?php
session_start();
if (!isset($_SESSION["user"]))
header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="login.php?logout=true">Salir</a>
HOLA 
<?php echo $_SESSION['user'];

?>
Tu email es:
<?php echo $_SESSION['datosUsuario']['email'];

?>
Mira que foto más chula:<br>
<img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiqgAr9AZb4GrXRpaGshNrfCtJwc0nVaaX0z3bg9brT2Oig4L54M4D1ao_KzzB_ZAbpsArEohA-NI-RAsYpb8pv_DyInZEP8orTD2WNvGGwez1ceawGhJNtVUrxW9nl_hIpTmJTOHQJ-kY/s1600/gif+con+movimiento,gatito,saludo.gif" width=70%>


</body>
</html>