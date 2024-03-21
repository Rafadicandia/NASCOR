<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//aqui establecemos la clase son tres atributos. Todas las variables de los atributos son públicas.
class Fruit {
  public $name;
  public $color;
  public $weight;
//aqui establecemos la función set name(metodo para setear el nombre). EL metodo de acceso es publico
  function set_name($n) {  
    $this->name = $name;
  }
  //aqui establecemos la función set color(metodo para setear el color). EL metodo de acceso es publico
    function set_color($color) { 
    $this->color = $color;
  }
  //aqui establecemos la función set peso(metodo para setear el peso). EL metodo de acceso es publico
    function set_weight($weight) { 
    $this->weight = $weight;
  }
}

$mango = new Fruit();
$mango->set_name('Mango'); // OK
$mango->set_color('Yellow'); // ok
$mango->set_weight('300'); // ok

?>
<h1>Fruit Description</h1>
<p>Name: <?php echo $mango->name; ?></p>
<p>Color: <?php echo $mango->color; ?></p>
<p>Weight: <?php echo $mango->weight; ?></p>
</body>
</html>