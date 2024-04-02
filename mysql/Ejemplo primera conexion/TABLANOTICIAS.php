<?php
require ("db_utilis.php");

// Comprobamos si recibimos datos por post para insertarlos en la base de datos. 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recogemos los datos del formulario
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $categoria = $_POST['categoria'];
    // Tratamiento de imagen
    $imagen = "img/default.jpg";
    if (isset($_FILES["file"]) && $_FILES['file']['size'] > 0){
        $imagePath = "img/" . $_FILES["file"]["name"];
        if (!move_uploaded_file($_FILES["file"]["tmp_name"], $imagePath)) {
            $mensaje = "ERROR: No se ha subido la noticia <a href='tablanoticias.php'>Volver</a>";
            echo $mensaje;
            exit;
        }
        $imagen = $imagePath;
    }
    // Creamos la consulta sql
    $q = "INSERT INTO noticias SET titulo='$titulo', texto='$texto', categoria='$categoria', imagen='$imagen'";
    // Procedemos a insertar los datos.
    mysqli_query(conexion(), $q);
}
$desde = 0;
// Hacemos una consulta a una tabla
//if (isset($_GET['desde']))
//$desde = $_GET['desde'];
//$hasta = $desde +5;
// Añadiremos LIMIT
$query = "SELECT * FROM noticias";
$result = consulta ($query);
$nfilas = contar_filas($query);
$query = "SELECT DISTINCT categoria FROM noticias ORDER BY categoria";
$resultCats = consulta($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión a MySQL</title>
    <style>
        .tabla-noticias {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        
        .tabla-noticias th {
            background-color: #004090;
            color: #fff;
            padding: 5px;
            text-align: center;
        }
        
        .tabla-noticias td {
            padding: 5px;
            border: 1px solid #ddd;
        }
        
        .tabla-noticias td img {
            width: 50px;
        }
        
        .tabla-noticias a {
            color: #004080;
        }
    </style>
</head>
<body>
    <table class="tabla-noticias">
        <thead>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Texto</th>
                <th>Categoría</th>
                <th>Fecha</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["titulo"]; ?></td>
                    <td> <?php
                   $strFinal = substr($row["texto"], 0, 100);

                   echo substr($row["texto"], 0, 100);
                   if ($strFinal < $row["texto"]){
                       echo " ... ";
                   }
                       echo " <br><a href='noticia.php?id=" . $row['id'] ."'>Ir a la noticia completa -></a><br>";
                       echo " <a href='noticia.php?id=" . $row['id'] ."&update=true'>Modificar noticia -></a>";
                   ?></td>
                   
                  
                    <td><?php echo $row["categoria"]; ?></td>
                    <td><?php echo $row["fecha"]; ?></td>
                    <td><img src="<?php echo $row["imagen"]; ?>" alt="Imagen"></td>
                    <td>
                        <form action="eliminar.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="submit" value="Eliminar" class="eliminar">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <form name="form" action="tablanoticias.php" method="POST" enctype="multipart/form-data">
        Título:<br>
        <input type="text" name="titulo"><br>
        Texto:<br>
        <input type="text" name="texto"><br>
        Categoría:<br>

        <input list="categorias" type="text" name="categoria" value=""><br>
        <datalist id="categorias">
        <?php while ($row= mysqli_fetch_array($resultCats)) {?>
                    <option value="<?php echo $row['categoria'];?>"><?php echo $row['categoria'];?></option>
        <?php } ?>
        </datalist>

        <input type="file" name="file">
        <input type="submit" value="Añadir">
    </form>

</body>
</html>