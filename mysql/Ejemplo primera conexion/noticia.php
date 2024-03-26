<?php

if (!isset ($_GET["id"])) {
    $mensaje = "ERROR: Faltan parámetros requeridos <a href='tablanoticias.php'>Volver</a>";
    echo $mensaje;
    exit;

} else {
    $id = $_GET["id"];
    // INI archivo.ini
    $host = "localhost";
    $user = "Rafael_erp";
    $password = "Rafaelerp2024";
    $database = "noticias";
    // Conexión
    $conexion = mysqli_connect($host, $user, $password) or die ("No se puede conectar con el servidor");
    //
    // Seleccionamos la base de datos
    mysqli_select_db($conexion, $database) or die ("No se puede seleccionar la base de datos");

    $q = "SELECT * FROM noticias WHERE id=$id";
    $result = mysqli_query($conexion, $q);
    $noticia = mysqli_fetch_array($result);
    $titulo = $noticia['titulo'];
    $texto = $noticia['texto'];
    $categoria = $noticia['categoria'];
    $fecha = $noticia['fecha'];
    $imagen = $noticia['imagen'];
    mysqli_close($conexion);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  padding: 0;
  margin: 0;
}

.container {
  margin: 50px;
}

.card {
  width: 280px;
  border-radius: 3px;
  box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  font-family: Arial;
  margin: 0 auto;
  transition: transform 0.3s ease;
}

.card:hover {
  transform: scale(1.03);
}

img {
  border-radius: 3px 3px 0 0;
  width: 280px;
  overflow: hidden;
}

.content {
  padding: 20px;
  
}

.title {
  font-weight: 700;
  color: hsl(0, 0%, 14%);
  padding-bottom: 10px;
}

.text {
  font-weight: 400;
  color: hsl(0, 0%, 30%);
}

.social {
  font-weight: 400;
  color: hsl(0, 0%, 50%);
  padding: 20px;
  text-align: right;
}

.views, .likes {
  display: inline;
}

.likes {
  cursor: pointer;
}

.likes:hover {
  color: #1D1F20;
}
        </style>
</head>
<body>

<div class="container">
  <!-- NEWS CARD -->
  <div class="card">
    
      <!-- NEWS RELATED IMAGE -->
      <div class="img">
        <img src="<?php echo $imagen; ?>" alt="Imagen de la noticia">
      </div>
    
      <!--NEWS CONTENT -->
      <div class="content">
        <div class="title">
          <p><?php echo $titulo?></p>
        </div>
        <h6> <p class="date">Publicado
            <?php echo $fecha; ?>
        </p> </h6>
        <p>
        <?php echo $texto; ?><br>
        </p>
       <h6> <p class="author">Categoría: <?php echo $categoria; ?></p> </h6>
      </div>
  </div>
</div>
<a href="tablanoticias.php">Volver<<</a>

<?php 
    if (isset($_GET['modificar'])){ ?>
    <div class="container">
    <h2>Modificar Noticia</h2>
    <form action="modificar.php" method="post">
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" id="titulo" name="titulo" value="Título de la noticia">
        </div>
        <div class="form-group">
            <label for="text">Texto:</label>
            <textarea id="texto" name="texto" rows="4">
            <?php echo $texto; ?>
            </textarea>
                 </div>
        <div class="form-group">
            <label for="image">URL de la imagen:</label>
            <input type="text" id="imagen" name="imagen" value="<?php echo $imagen; ?>">
        </div>
        <div class="form-group">
            <label for="date">Fecha de publicación:</label>
            <input type="text" id="fecha" name="fecha" value="<?php echo $fecha; ?>">
        </div>
        <div class="form-group">
            <label for="categoria">Fecha de publicación:</label>
            <input type="text" id="categoria" name="categoria" value="<?php echo $categoria; ?>">
        </div>
        <div class="form-group">
            <input type="submit" value="Guardar Cambios">
        </div>
    </form>
    <?php } ?>
</div> 

    
</body>
</html>

