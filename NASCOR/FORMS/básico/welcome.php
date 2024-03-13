<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
body {
  background-color: lightblue;
}

h1 {
  color: black;
  margin: auto;
  
}
</style>
</head>
<body>
<?php
// WELCOME
   if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["age"]) && $_POST['name']!='' && $_POST['email']!='' && $_POST["age"]!='') { ?>
       Wellcome: <?php echo $_POST["name"]; ?><br>
       Your email address is: <?php echo $_POST["email"]; ?><br>
       Your Age is: <?php echo $_POST["age"]; ?><br>

   <?php } else {
       echo "ERROR, faltan parámetros";
       http_response_code(400);
   }
?>
</body>
</html>