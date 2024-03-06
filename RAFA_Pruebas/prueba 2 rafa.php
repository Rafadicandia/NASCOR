
<!DOCTYPE html>
<html lang="en">
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
            justify-content: space-between;
            max-width: 800px;
            margin: 0 auto;
        }
        .section {
            flex: 1;
            margin-right: 10px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .section h2 {
            margin-top: 0;
        }
        .section ul {
            padding: 0;
        }
        .section li {
            list-style-type: none;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="section">
        <h2>Formulario</h2>
        <form id="form" action="" method="POST">
            Premio 1 (€): <input type="number" name="premio1" value=""><br>
            Cantidad Ganadores Premio 1: <input type="number" name="cantidad1"><br>
            Premio 2 (€): <input type="number" name="premio2" value=""><br>
            Cantidad Ganadores Premio 2: <input type="number" name="cantidad2"><br>
            <input type="submit" value="Realizar Sorteo">
        </form>
    </div>

    <div class="section">
        <h2>Ganadores Premio 1</h2>
        <ul>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $premio1 = $_POST["premio1"];
                $cantidad1 = $_POST["cantidad1"];
                $premio2 = $_POST["premio2"];
                $cantidad2 = $_POST["cantidad2"];

                // Definir array con los nombres de los participantes
                $concursantes = array("Juan", "María", "Pedro", "Ana", "Luis", "Laura");

                function creaListaAleatorios($premios, $cantConcursantes) {
                    $ganadores = array();
                    $cantConcursantes = $cantConcursantes - 1;
                    while (count($ganadores) < $premios) {
                        $ganador = rand(0, $cantConcursantes);
                        if (!in_array($ganador, $ganadores)) {
                            $ganadores[] = $ganador;
                        }
                    }
                    return $ganadores;
                }

                $cantConcursantes = count($concursantes);
                $listaganadores = creaListaAleatorios($cantidad1, $cantConcursantes);

                foreach ($listaganadores as $numorder) {
                    echo "<li>" . $concursantes[$numorder] . "</li>";
                }
            }
            ?>
        </ul>
    </div>

    <div class="section">
        <h2>Ganadores Premio 2</h2>
        <ul>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $cantConcursantes = count($concursantes);
                $listaganadores = creaListaAleatorios($cantidad2, $cantConcursantes);

                foreach ($listaganadores as $numorder) {
                    echo "<li>" . $concursantes[$numorder] . "</li>";
                }
            }
            ?>
        </ul>
    </div>
</div>
</body>
</html>
