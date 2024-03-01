<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$contactos = array(
    array("nombre" => "Ramon", "telefono" => "63478967", "correoelectroinco" => "ramon98@gmail.com"),
    array("nombre" => "Gustavo", "telefono" => "634330798", "correoelectroinco" => "gus08@hotmail.com"),
    array("nombre" => "Susana", "telefono" => "64598904", "correoelectroinco" => "ramonholasusana@mimail.com")
);

foreach ($contactos as $contacto) {
    echo "<b>".$contacto["nombre"]."</b><br>"; // Corregir la comilla de cierre
    foreach ($contacto as $clave => $dato) {
        // Corregir las comillas y agregar un espacio después de "clave"
        echo $clave . ": " . $dato . "<br>"; // Corregir las comillas y agregar un salto de línea
    }
}
?>

</body>
</html>