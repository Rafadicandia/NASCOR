<?php
require ("ini.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
<?php
// Saludo al usuario
   if (isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["password"])) { ?>
       Hola: <?php echo $_POST["nombre"]; ?><br>
       Tu email es: <?php echo $_POST["email"]; ?><br>
       Tu Password es: <?php echo $_POST["password"]; ?><br>

   <?php } else {
       echo "ERROR, faltan parámetros";
       http_response_code(400);
   }
?>
</body>
</html>