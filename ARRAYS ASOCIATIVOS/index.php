<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$frutas = array(
    array("color" => "amarillo", "sabor" => "dulce", "nombre" => "Pera"),
    array("color" => "verde", "sabor" => "acido", "nombre" => "Lima"),
    array("color" => "naranja", "sabor" => "dulce", "nombre" => "Naraja")
);

foreach ($frutas as $fruta) {
    echo "<b>".$fruta["nombre"]."</b><br>"; // Corregir la comilla de cierre
    foreach ($fruta as $clave => $dato) {
        // Corregir las comillas y agregar un espacio después de "clave"
        echo $clave . ": " . $dato . "<br>"; // Corregir las comillas y agregar un salto de línea
    }
}
?>

</body>
</html>