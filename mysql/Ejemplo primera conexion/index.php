<?php
// INI
$host = "localhost";
$user = "Rafael_erp";
$password = "Rafaelerp2024";
$database = "noticias";

// Conexión
$conexion = mysqli_connect($host, $user, $password) or die ("No se puede conectar con el servidor");

//echo "Hemos seleccionado la base de datos $database";

mysqli_select_db($conexion, $database) or die ("fallo en la conexion");

$result = mysqli_query($conexion,"SELECT * FROM noticias") or die ("Fallo en la consulta");
$nfilas = mysqli_num_rows($result);
//$fila = mysqli_fetch_array($result);
mysqli_close($conexion);
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión a Mysql</title>
</head>
<body>

    <?php
echo  "Tenemos $nfilas noticias<hr>";
while ($row = mysqli_fetch_array($result)) {
/*    $fecha = strtotime($row["fecha"]);
    $fecha = date('m/d/Y', $fecha);*/
    echo 
   // "id: ".$row["id"]."<br> 
    "Título: <b>" .$row["titulo"]."</b><br>
    Texto: <b>" .$row["texto"]."</b><br>
    Categoría: <b>" .$row["categoria"]."</b><br>
    Imagen: <img src='" .$row["imagen"]."' alt='imagen de noticia'><br>
    Fecha de publicación: <b>" .$row["fecha"]."</b><hr>"
    ;
}


?>
</body>
</html>