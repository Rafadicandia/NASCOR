<!DOCTYPE html>
<html>
<body>

<?php
//establecemos la clase Fruit
class Fruit {
    //aqui determinamos los atributos
  public $name;
  public $color;
//aquí determinamos lel constructor del método
  function __construct($name, $color) {
    $this->name = $name; 
    $this->color = $color; 
  }
  //aquí van las funciones del metodo
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}
//aquí determinamos un nuevo objeto con nombre y color
$apple = new Fruit("Apple", "red");
?>
<!--aquí tenemos el codigo html con als funciones del objeto-->
<h1>Fruit Description</h1>
<p>Name: <?php echo $apple->get_name(); ?></p>
<p>Color: <?php echo $apple->get_color(); ?></p>

</body>
</html>