
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// define variables and set to empty values
$name = $email = $comment = "";
$nameErr = $emailErr = $commentErr =  '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['name'])){
        $nameErr="Debes introducir un nombre válido";
    }else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Sólo letras y espacios, por favor";
        }    
    }
    if (empty($_POST['email'])){
        $emailErr="Debes introducir un email válido";
    }else{
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr="Debes introducir un email válido";
        }
    }

    if (empty($_POST['comment'])){
        $commentErr="Debes introducir algún comentario válido";
    }else{
        $comment = test_input($_POST["comment"]);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Guarda tu comentario en el servidor!</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name" value="<?php echo $name;?>"> <span style="color:red;"> <?php echo $nameErr;?></span>
    <br><br>
    <label>E-mail:</label> <input type="text" name="email" value="<?php echo $email;?>"> <span style="color:red;"> <?php echo $emailErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea> <span style="color:red;"> <?php echo $commentErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comment'])) {
    $file = fopen("formulario_$name.txt", 'x');
    fwrite($file, "<h1>Hola: $name</h1><br>E-mail: $email<br><br>Comment: $comment<br>");
    fclose($file);
}else{
        echo "<h3>falta información</h3>";
    }
?>

</body>
</html>
