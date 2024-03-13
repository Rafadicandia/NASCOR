<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Array de nombres
    $nombres = array("Juan", "María", "Pedro", "Ana", "Luis", "Laura", "Diego", "Sofía", "Carlos", "Elena");
// Impresion de lista de nombres    
    foreach ($nombres as $nombre){
        echo "$nombre <br>";
    };
    echo "<hr>";
    
//Selector de nombres que comiencen con L
    foreach ($nombres as $nombre) {
        $nombre=strtolower($nombre);
        if($nombre[0]== "l"){
            echo "<h1>Hola " . $nombre ."!!<h1><hr>";
        }
    }

    ?>
</body>
</html>