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

<form id="form" action="welcome.php" method="post">
       Name: <input type="text" name="name" value=""><br>
       E-mail: <input type="text" name="email"><br>
       Age: <input type="text" name="age"><br>
       <input type="submit">
   </form>

   <?php
   if ($_SERVER['REQUEST_METHOD'] == "POST") { ?>
       Wellcome:
       <?php echo $_POST["name"]; ?><br>
       Your email address is:
       <?php echo $_POST["email"]; ?><br>
       Your Age is:
       <?php echo $_POST["age"]; ?><br>
       
   <?php } else {
       echo "Cubre el formulario";
   }
   ?>

</body>
</html>