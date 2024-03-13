<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array asociativo coches</title>
</head>
<body>
    <?php

$auto = array(
        "marca" => "Toyota",
        "modelo" => "Corolla",
        "año" => 2022
);

foreach ($auto as $clave => $valor) {
    echo "<li>$clave: $valor</li>";
}
echo "<hr>";
echo ("La nueva marca es: ").$auto["marca"]="Nissan";
echo "<hr>";
unset($auto["año"]);
$auto["color"] = "Verde";
foreach ($auto as $clave => $valor) {
    echo "<li>$clave: $valor</li>";
}
echo "<hr>";
echo "<h2>Orden por valor</h2>";
asort($auto);
foreach ($auto as $clave => $valor) {
    echo "<li>$clave: $valor</li>";
}
echo "<hr>";
echo "<h2>Orden por clave</h2>";
ksort($auto);
foreach ($auto as $clave => $valor) {
    echo "<li>$clave: $valor</li>";
}
?>
</body>
</html>