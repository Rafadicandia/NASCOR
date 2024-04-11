<?php
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
    header('Access-Control-Allow-Headers: token, Content-Type');
    header('Access-Control-Max-Age: 1728000');
    header('Content-Length: 0');
    header('Content-Type: text/plain');
    die();
 }
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');
 
function conexion()
{
    // INI
    $host = "localhost";
    $user = "Rafael_erp";
    $password = "Rafaelerp2024";
    $database = "noticias";

    // Conexión
    $conexion = mysqli_connect($host, $user, $password) or die ("No se puede conectar con el servidor: ");
    
    // Seleccionamos la base de datos
    mysqli_select_db($conexion, $database) or die ("No se puede seleccionar la base de datos");
    return $conexion;
}

function consulta($q)
{
    $conexion = conexion();
    $result = mysqli_query($conexion, $q) or die ("Error en la consulta: ");
    
    return $result;
}

function contar_filas($q)
{
    $conexion = conexion();
    $result = consulta($q);
    $nFilas = mysqli_num_rows($result);
    mysqli_close($conexion);
    return $nFilas;
}

function escape($q){
    $connection = conexion();
    return mysqli_real_escape_string($connection, $q);
}

function fecthArray($result){
    return mysqli_fetch_array($result);
}
?>
