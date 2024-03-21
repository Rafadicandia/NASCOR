<?php
// INI
$host = "localhost";
$user = "Rafael_erp";
$password = "Rafaelerp2024";
$database = "noticias";

// Conexión
$conexion = mysqli_connect($host, $user, $password) or die ("No se puede conectar con el servidor");

mysqli_select_db($conexion, $database) or die ("Fallo en la conexión");

$result = mysqli_query($conexion, "SELECT * FROM noticias") or die ("Fallo en la consulta");
$nfilas = mysqli_num_rows($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $categoria = $_POST['categoria'];
    $q = "INSERT INTO noticias (titulo, texto, categoria) VALUES ('$titulo', '$texto', '$categoria')";
    mysqli_query($conexion, $q);
}

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
            background-color: #004080;
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
                    <td><?php echo $row["ID"]; ?></td>
                    <td><?php echo $row["titulo"]; ?></td>
                    <td><?php echo $row["texto"]; ?></td>
                    <td><?php echo $row["categoria"]; ?></td>
                    <td><?php echo $row["fecha"]; ?></td>
                    <td><?php echo $row["imagen"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <table class="send">
        <tr>
            <td>
                <form action="tablanoticias.php" name="formulario" method="post">
                    <label for="titulo">Título: </label><br>
                    <input type="text" name="titulo" id="titulo"><br>
                    <label for="texto">Texto: </label><br>
                    <input type="text" name="texto" id="texto"><br>
                    <label for="categoria">Categoría: </label><br>
                    <input type="text" name="categoria" id="categoria"><br><br>
                    <input type="submit" value="Añadir">
                </form>
            </td>
        </tr>
    </table>
</body>
</html>

<?php
mysqli_close($conexion);
?>
