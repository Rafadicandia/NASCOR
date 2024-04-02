<?php
function conexion ()
{
    // INI
$host = "localhost:3306";
$user = "Rafael_erp";
$password = "Rafaelerp2024";
$database = "noticias";

// Conexión
$conexion = mysqli_connect($host, $user, $password) or die ("No se puede conectar con el servidor");
// Seleccionamos la base de datos

mysqli_select_db($conexion, $database) or die ("Fallo en la conexión");
return $conexion;
}
function consulta ($q) {
    $conexion = conexion ();
    $result = mysqli_query($conexion, $q);
    mysqli_close ($conexion);
    return $result;
}
function contar_filas($q){
    $result = consulta($q);
    $nFilas = mysqli_num_rows($result);
    return $nFilas;
}


function escape($q){
    $connection = conexion();
    return mysqli_real_escape_string($connection, $q);
    }

?>