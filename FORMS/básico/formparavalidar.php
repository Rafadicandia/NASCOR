<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="form" action="welcome.php" method="POST">
    Name: <input type="text" name="name" value=""><br>
    E-mail: <input type="text" name="email"><br>
    Age: <input type="text" name="age"><br>
    <input type="submit">
</form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $name = test_input($_POST["name"]);
           $email = test_input($_POST["email"]);
       }
       function test_input($data) {
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
       }

?>
</body>
</html>