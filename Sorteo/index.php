<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


// Definir array con los nombres de los participantes
$nombres = array(
        "Juan",
        "María",
        "Pedro",
        "Ana",
        "Luis"
    );

// Función para generar un array aleatorio con los índices de los ganadores
function creaListaaleatrorios($premios, $cantnombres) {
    $ganadores = array();
    $cantnombres = $cantnombres -1;
    while (count($ganadores) < $premios) {
        $ganador = rand(0, $cantnombres);
        if (!in_array($ganador, $ganadores)) {
            $ganadores[] = $ganador;
        }
    }
    return $ganadores;
}



// Llamar a la función. Con la cantidad de premios y la cantidad de participantes
$premios = 3;
$cantnombres = count($nombres);
$listaganadores = creaListaaleatrorios($premios, $cantnombres);

foreach ($listaganadores as $numorder) {
    echo $nombres[$numorder] ."<br>";
}
 
exit

?>
</body>
</html>