<?php

 
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
