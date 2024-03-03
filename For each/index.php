<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach nombres</title>
</head>
<body>
    <?php
    $nombres = array('Paco', 'Pedro', 'Perico', 'Alfonso', 'Paul');
    foreach ($nombres as $nombre){    
        if (str_starts_with(strtolower($nombre),'p')){
            echo "Hola " . $nombre;
            echo "<br>".strpos(strtolower($nombre),'p');
        }
    }
?>
</body>
</html>