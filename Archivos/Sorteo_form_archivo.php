<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Sorteo</title>
</head>
<form action="Sorteo_form_archivo.php" method="POST">
    Concursante: <input name="concursante">
    <input type="submit" name="enviar">
</form>
<form action="Sorteo_form_archivo.php" method="POST">
   Cantidad premios: <input type="number" name="cantidadPremios">
    Premio 1 <input type="number" name="premio1">
    Premio 2<input type="number" name="premio2">
    Premio 3<input type="number" name="premio3">
    <input type="submit" value="enviar">
</form>
<body>

    <?php
   
    if (isset($_POST['cantidadPremios'])) {
        $archivoLista = fopen('.lista', 'r');
        $archivoLista = file_get_contents('.lista');
        $nombres=explode("<br>", $archivoLista);
        echo "Concursantes<br>".$archivoLista;

        function creaListaaleatorios($premios, $cantNombres)
        {
            $ganadores = array();
            $indiceParticipantes = $cantNombres - 1;
            while (count($ganadores) < $premios) {
                $ganador = rand(0, $indiceParticipantes);
                if (!in_array($ganador, $ganadores)) {
                    $ganadores[] = array($ganador, $_POST['premio' . count($ganadores)+1]);
                }
            }
            return $ganadores;
        }
        $premios = $_POST['cantidadPremios'];
        $cantNombres = count($nombres); // 10
        $listaGanadores = creaListaaleatorios($premios, $cantNombres);

        foreach ($listaGanadores as $ganador) {
            echo $nombres[$ganador[0]] . "<br>";
            echo $ganador[1] . "<br>";
        }
        exit;
    } else if(isset($_POST['concursante'])){
        $archivoLista = fopen('.lista', 'a');
        if(!$archivoLista){
            $archivoLista=fopen('.lista', 'w');
        }
        fwrite($archivoLista, $_POST['concursante'] . '<br>');
        $lista = file_get_contents('.lista');
        fclose($archivoLista);
        echo $lista;
    }else{
        echo "Cubre el formulario<br>";

    }
    
    ?>
</body>

</html>
