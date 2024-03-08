
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body {
            background-color: linen;
        }

        form {
            color: maroon;
            margin-left: 40px;
            border-style: solid;
            margin-right: 1400px;
        }
    </style>
</head>
<body>
<!-- Creamos un formulario. 
El formulario enviará los datos ingresados por el usuario a un archivo llamado "welcome.php" utilizando el método HTTP POST. -->

<form id="form" action="welcome.php" method="POST">
    Name: <input type="text" name="name" value=""><br>
    E-mail: <input type="text" name="email"><br>
    Age: <input type="text" name="age"><br>
    <input type="submit">
</form>

<!-- Verificamos si el formulario se ha enviado utilizando el método POST. Si es así, se ejecuta el código dentro de este bloque. -->

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") { ?>
    Wellcome:
    <?php echo $_POST["name"]; ?><br>
    Your email address is:
    <?php echo $_POST["email"]; ?><br>
    Your Age is:
    <?php echo $_POST["age"]; ?><br>

<!-- Si el formulario no se ha enviado aún (es decir, si la solicitud no es POST), 
esta parte del código imprime "Cubre el formulario".  -->

<?php } else {
    echo "Cubre el formulario";
}
?>

</body>
</html>