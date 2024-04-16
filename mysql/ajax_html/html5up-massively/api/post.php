<?php
    require('db_utilis.php');
    /*** Recogemos id después e comprobar si viene */

    if (!isset($_GET['id'])){
        http_response_code(400);
        echo "Faltan parámetros requeridos";
        exit;
    }
    $id = $_GET['id'];
    /** Consulta */
    $q="SELECT * FROM noticias WHERE id='$id'";

    $result = quer($q);
    header('Content-Type: application/json; charset=utf-8');
    $data = array();
    foreach($result as $row){
        $data[] = $row;
    }
    echo json_encode($data, JSON_PRETTY_PRINT);
    exit;