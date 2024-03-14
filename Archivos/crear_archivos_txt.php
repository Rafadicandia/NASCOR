<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php
    $file= fopen('miarchivo5.txt', 'x');

    fwrite($file, '<h1>HOLA MUNDO</h1><br>222<br>');

    echo file_get_contents('miarchivo5.txt');
    //readfile('miarchivo5.txt');

    fclose($file);
   
    $file2= fopen('miarchivo.csv', 'x');
    fwrite($file, 'columna1, columna2;fila1C1, fila1C2');

    fclose($file2);





    ?>
</body>
</html>