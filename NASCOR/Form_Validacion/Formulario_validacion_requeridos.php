<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>

    <?php

    $name = $email = $gender = $comment = $website = "";
    $nameErr = $emailErr = $gnderErr = $commentErr = $webErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['name'])){
        $nameErr="Debes introducir un nombre válido";
    }else{
        $name = test_input($_POST["name"]);
    }
    if(empty($_POST['email'])){
        $emailErr="Debes introducir un email válido";
    }else{
        $email = test_input($_POST["email"]);
    }
    if(empty($_POST['gender'])){
        $genderErr="Debes introducir un gender";
    }else{
        $gender = test_input($_POST["gender"]);
    }
    if (test_input($_POST['comment']=""))
        $commentErr="Debes introducir un comment válido";
    }else{
        $comment = test_input($_POST["comment"]);
    }
    if(empty($_POST['website'])){
        $webErr="Debes introducir un website válido";
    }else{
        $website = test_input($_POST["website"]);
    }  
function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}   
?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" ><?php echo $nameErr?><br>
    E-mail: <input type="text" name="email"><?php echo $emailErr?><br>
    Website: <input type="text" name="website"><?php echo $webErr?><br>
    Comment: <textarea type="text" name="comment"></textarea><?php echo $commentErr?><br>
    Gender: <input type="text" name="gender"><?php echo $genderErr?><br>
    <input type="submit">
</form>
<?php
  

if($_SERVER["REQUEST_METHOD"] = "POST"){
    echo "<h2>Your Input:<h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
}
?>
</body>
</html>