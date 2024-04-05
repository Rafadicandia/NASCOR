<?php
require ("db_utilis.php");

// Comprobamos si recibimos datos por post para insertarlos en la base de datos. 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recogemos los datos del formulario
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $categoria = $_POST['categoria'];
    $user_id = $_POST['user_id'];
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
    $q = "INSERT INTO noticias SET titulo='$titulo', texto='$texto', categoria='$categoria', imagen='$imagen', user_id='$user_id'";
    // Procedemos a insertar los datos.
    mysqli_query(conexion(), $q);
}
$num = 3;
$comienzo = 0;
if (isset($_GET['comienzo'])) {
 
    $comienzo = $_GET['comienzo'];
}
$columna = "id";
if (isset($_GET['columna'])) {
    $columna = $_GET['columna'];
}
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
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <table class="tabla-noticias">
        <thead>
            <tr>
                <th>Id</th>
                <th>user_id</th>
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
                    <td><?php echo $row["user_id"]; ?></td>
                    <td><?php echo $row["titulo"]; ?></td>
                    <td> 
                        <?php
                        $strFinal = substr($row["texto"], 0, 100);

                        echo substr($row["texto"], 0, 100);
                        if ($strFinal < $row["texto"]){
                       echo " ... ";
                        }
                       echo " <br><a href='noticia.php?id=" . $row['id'] ."'>Ir a la noticia completa -></a><br>";
                       echo " <a href='noticia2.php?id=" . $row['id'] ."&update=true'>Modificar noticia -></a>";
                        ?>
                   
                        <form action="eliminar.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="hidden" name="imagen" value="<?php echo $row['imagen']; ?>">
                            <input type="submit" value="Eliminar" class="eliminar">
                        </form>
                    </td>
                    <td><?php echo $row["categoria"]; ?></td>
                    <td><?php echo $row["fecha"]; ?></td>
                    <td><img src="<?php echo $row["imagen"]; ?>" alt="Imagen"></td>
                    
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php if ($comienzo > 0) {
        ?>
        <a href="tablanoticias.php?comienzo=<?php echo $comienzo - $num; ?>">
            << Retroceder <?php echo $num; ?>
        </a>
    <?php } ?>
    <?php if ($comienzo + $num <= $nfilas) { ?>
        <a href="tablanoticias.php?comienzo=<?php echo $comienzo + $num; ?>">
            Avanzar >>
            <?php echo $num; ?>
        </a>
    <?php } ?>

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