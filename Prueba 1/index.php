<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Sorteo</title>
</head>
<body>
<form id="form" action="index.php" method="POST">
    Cantidad de premios: <input type="numero" name="cantidadPremios" value=""><br>
    Monto Premio 1 (€): <input type="numero" name="cantidad1"><br>
    Monto Premio 2 (€): <input type="numero" name="cantidad2"><br>
    Monto Premio 3 (€): <input type="numero" name="cantidad3"><br>
                        <input type="submit" value="enviar"><br>
   </form>
<?php

if (isset($_POST["cantidadPremios"])){
    $nombres = array(
        "Juan",
        "María",
        "Pedro",
        "Ana",
        "Luis",
        );
    

function creaListaaleatrorios($premios, $cantNombres) 
{
    $ganadores = array();
    $indiceParticipantes  = $cantNombres -1;
    while (count($ganadores) < $premio1) {
        $ganador = rand(0, $indiceParticipantes );
        if (!in_array($ganador, $ganadores)) {
            $ganadores[] = array ($ganador, $_POST["premio". count($ganadores)*1]);
        }
    }
    return $ganadores;
}
    
$premio1 = $_POST["cantidadPremios"];
$cantNombres = count($nombres);
$listaGanadores = creaListaaleatrorios($premio1, $cantNombres);

foreach ($listaGanadores as $ganador) {
    echo $nombres[$ganador] . "<br>";
    echo $ganador[1] . "<br>";
}
 exit;

}

?>
</body>
</html>