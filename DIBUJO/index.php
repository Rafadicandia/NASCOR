<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$i = 4;

while ($i >= 1) {
    $j = 1;
    while ($j <= $i) {
        echo "*";
        $j++;
    }
    echo "<br>";
    $i--;
}
?>
</body>
</html>