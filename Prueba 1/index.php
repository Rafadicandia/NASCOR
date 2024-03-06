
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
            
        }
        .section {
            flex: 1;
            margin: 10px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #FCEDC8
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="text"] {
            margin-bottom: 10px;
            padding: 5px;
        }
        input[type="submit"] {
            padding: 8px 15px;
            background-color: #4CAF90;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
            <h2>Concursantes</h2>
            <ul>
                <?php
                $concursantes = array("Carlos", "Ana", "Pedro", "Laura", "Juan", "María");
                foreach ($concursantes as $concursante) {
                    echo "<li>$concursante</li>";
                }
                ?>
            </ul>
       
        </div>
        <div class="section">
            <h2>Formulario de Premios</h2>
            <form id="form" action="" method="post">
                <label for="premio1">Premio 1 (€)</label>
                <input type="text" name="premio1" id="premio1" required>
                <label for="cantidad1">Cantidad de Premios</label>
                <input type="number" name="cantidad1" id="cantidad1" required>
                <label for="premio2">Premio 2 (€)</label>
                <input type="text" name="premio2" id="premio2" required>
                <label for="cantidad2">Cantidad de Premios</label>
                <input type="number" name="cantidad2" id="cantidad2" required>
                <input type="submit" value="Realizar Sorteo">
            </form>
        </div>
        <div class="section">
            <h2>Ganadores</h2>
            <ul>
                
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $premio1 = $_POST["premio1"];
                    $cantidad1 = $_POST["cantidad1"];
                    $premio2 = $_POST["premio2"];
                    $cantidad2 = $_POST["cantidad2"];

                    $premios = array();
                    for ($i = 0; $i < $cantidad1; $i++) {
                        $premios[] = $premio1;
                    }
                    for ($i = 0; $i < $cantidad2; $i++) {
                        $premios[] = $premio2;
                    }
//Utilizo un shuffle en lugar de rand para elegir un concursante random del Array de concursantes
                    shuffle($concursantes);
                    $ganadores = array();
                    foreach ($concursantes as $concursante) {
                        $premio = array_shift($premios);
                        if ($premio) {
                            $ganadores[$concursante] = $premio;
                        }
                    }

                    foreach ($ganadores as $ganador => $premio) {
                        echo "<li>$ganador - Premio: $premio €</li>";
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>


