<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Servidor y Super Globales</title>
</head>
<body>
<?php
    define("nombre", "Rafael");
    function escribeNombre(){
        echo "Hola".nombre;
    }
    escribeNombre();
    echo "<hr>";


foreach ($_SERVER as $key => $value) {
    echo "<b>".$key."</b>: ".$value."<br>";
}
?>
</body>
</html>