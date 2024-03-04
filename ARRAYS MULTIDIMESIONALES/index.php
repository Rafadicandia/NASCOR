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
    array("nombre" => "Ramon", "telefono" => "63478967", "correoelectronico" => "ramon98@gmail.com"),
    array("nombre" => "Gustavo", "telefono" => "634330798", "correoelectronico" => "gus08@hotmail.com"),
    array("nombre" => "Susana", "telefono" => "64598904", "correoelectronico" => "holasusana@mimail.com")
);

foreach ($contactos as $contacto) {
    echo "<b>".$contacto["nombre"]."</b><br>";
    foreach ($contacto as $clave => $dato) {
        echo $clave . ": " . $dato . "<br>";
    }
};
echo "<hr>";
   
$contactos[] = array("nombre" => "Pedro", "telefono" => "63478967", "correoelectronico" => "Pedro98@gmail.com"); // Otra forma de agregar un nuevo contacto
$contactos[0]["telefono"] = "834530778"; // Cambié el teléfono del primer contacto

foreach ($contactos as $contacto) {
    echo "<b>".$contacto["nombre"]."</b><br>";
    foreach ($contacto as $clave => $dato) {
        echo $clave . ": " . $dato . "<br>";
    }
}
?>

<body>
</head>