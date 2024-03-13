<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Primero creamos un array asociativo llamado $contactos que contiene tres elementos por contacto. 
//Cada contacto tiene un nombre, un número de teléfono y una dirección de correo electrónico.
$contactos = array(
    array("nombre" => "Ramon", "telefono" => "63478967", "correoelectronico" => "ramon98@gmail.com"),
    array("nombre" => "Gustavo", "telefono" => "634330798", "correoelectronico" => "gus08@hotmail.com"),
    array("nombre" => "Susana", "telefono" => "64598904", "correoelectronico" => "holasusana@mimail.com")
);
//Aquí usamos una función foreach para recorrer (iterar) cada elemento del array $contactos.
//En cada iteración, se asigna el valor del elemento actual a la variable $contacto.
//Luego se imprime el nombre del contacto y se itera sobre los elementos del contacto para imrpimir lo siguiente:
//(nombre, teléfono, correo electrónico), es decir, imprimimos la clave y su valor. 

foreach ($contactos as $contacto) {
    echo "<b>".$contacto["nombre"]."</b><br>";
    foreach ($contacto as $clave => $dato) {
        echo $clave . ": " . $dato . "<br>";
    }
};
echo "<hr>";

//Añadimos un nuevo contacto llamado Pedro al final del array $contactos, y luego cambiamos el número de teléfono del primer contacto (Ramon) de "63478967" a "834530778".   
$contactos[] = array("nombre" => "Pedro", "telefono" => "63478967", "correoelectronico" => "Pedro98@gmail.com"); 
$contactos[0]["telefono"] = "834530778"; 

//Volvemos a usar la misma función foreach de la línea 22 para imprimir en pantalla el listado actualizado con el nuevo contacto y el número modificado. 
foreach ($contactos as $contacto) {
    echo "<b>".$contacto["nombre"]."</b><br>";
    foreach ($contacto as $clave => $dato) {
        echo $clave . ": " . $dato . "<br>";
    }
}
?>

<body>
</head>