<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
</head>
<body>
    <?php
$estudiantes = array(
       array(
           "nombre" => "Juan",
           "edad" => 20,
           "notas" => array(9, 8, 6)
       ),
       array(
           "nombre" => "María",
           "edad" => 22,
           "notas" => array(7, 9, 6)
       ),
       array(
           "nombre" => "Carlos",
           "edad" => 21,
           "notas" => array(8, 9, 7)
       ),
       array(
           "nombre" => "Laura",
           "edad" => 23,
           "notas" => array(6, 8, 9)
       )
   );
   //1. La edad de María.
   echo $estudiantes[1]["nombre"];
   echo "<hr>";
   //2. La segunda nota de Carlos.
   echo $estudiantes[2]["notas"][1];
   echo "<hr>";
   //3. El nombre de todos los estudiantes.
    foreach ($estudiantes as $estudiante) {
        echo "<b>".$estudiante["nombre"]."</b><br>";
    }
    echo "<hr>";
   //4. La media de notas de Laura *
   //$notasLaura = array($estudiantes[3]["notas"]);
   $mediaLaura = array_sum($estudiantes[3]["notas"]) / count($estudiantes[3]["notas"]);
    echo $mediaLaura


?>
</body>
</html>