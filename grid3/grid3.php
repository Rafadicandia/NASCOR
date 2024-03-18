
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="grid3.css">
</head>
<body>
    <?php

    $datos=array(
        array("¿Cómo somos?", "Honestos, ágiles y eficientes.", "imagenes/llegar.png"),
        array("¿Qué se nos da bien?", "Dotar a las compañías de las soluciones que lideran el mercado, asegurando el éxito de la implantación y su calidad", "imagenes/que_se_nos_da_bien.png"),
        array("¿Cómo hemos llegado hasta aquí?", "Con pasión y esfuerzo en nuestro trabajo, y con la colaboración de nuestros clientes desde hace más de 25 años.", "imagenes/llegar.png"),
        array("Cómo trabajamos", "Con nuestra propia metodología que nos asegura el éxito y la calidad de los proyectos, implantando las soluciones de manera más efectiva.", "imagenes/quienes_somos.png"),
    );
	$clase = "";
    foreach($datos as $dato){
        if ($clase == "ordenInverso"){
            $clase = "";
        } else {
            $clase="ordenInverso";
        }
        ?>
        <div>
            <div class="caja">
                <img src="<?php echo $dato[2]; ?>" class="<?php echo $clase ?>">
                <div class="texto">
                    <h2><?php echo $dato [0]; ?></h2>
                    <p><?php echo $dato [1]; ?> </p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

</body>
</html>
