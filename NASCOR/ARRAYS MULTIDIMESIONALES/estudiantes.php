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
   //El nombre de todos los estudiantes.
   echo "<h2>Lista de estudiantes</h2><br>";
   foreach ($estudiantes as $estudiante) {
       echo "<b>".$estudiante["nombre"]."</b><br>";
   }
   echo "<hr>";
   //La edad de María.
   echo "El segundo estudiante se llama: ".$estudiantes[1]["nombre"];
   echo "<hr>";
   //La segunda nota de Carlos.
   echo "La segunda nota de Carlos es: ".$estudiantes[2]["notas"][1];
   echo "<hr>";
   //La media de notas de Laura *
   $mediaLaura = array_sum($estudiantes[3]["notas"]) / count($estudiantes[3]["notas"]);
    echo "La media de notas de Laura es ".$mediaLaura


?>
</body>
</html>