<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$DatosPersonanles = array("Nombre"=>"Rafael", "Apellido"=>"di Candia", "Ciudad"=>"Montevideo");
foreach ($DatosPersonanles as $x => $y) {
    echo "$x: $y <br>";
}
?>
</body>
</html>