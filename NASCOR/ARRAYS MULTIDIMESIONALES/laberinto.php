<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$laberinto = array(
    array("#", "#", "#", "#", "#"),
    array("#", ".", ".", ".", "#"),
    array("#", ".", "#", ".", "#"),
    array("#", ".", ".", ".", "#"),
    array("#", "#", "#", "#", "#")
);

$x=0;
foreach ($laberinto as $fila) {
    foreach ($fila as $columna) {
        if ($columna === ".") {
                $x++;
        }
    }
}
echo "La cantidad de puntos en el laberinto es: " .$x;
?>
</body>
</html>