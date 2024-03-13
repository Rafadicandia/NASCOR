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
    $nameErr = $emailErr = $gnderErr = $commentErr = $webErr = $cursosErr= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!isset($_POST['cursos'])){
            $cursosErr="Debes introducir un nombre válido";
        }else{
            $cursos = $_POST['cursos'];
        }
        if(empty($_POST['name'])){
        $nameErr="Debes introducir un nombre válido";
        }else{
        $name = test_input($_POST["name"]);
        }
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
           }           
    }
    if(empty($_POST['email'])){
        $emailErr="Debes introducir un email válido";
    }else{
        $email = test_input($_POST["email"]);
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Invalid email format";
        }
    if(!isset($_POST['gender'])){
        $genderErr="Debes introducir un gender";
    }else{
        $gender = test_input($_POST["gender"]);
    }
    if(test_input($_POST['comment']="")){
        $commentErr="Debes introducir un comment válido";
    }else{
        $comment = test_input($_POST["comment"]);
    }
    if(empty($_POST['website'])){
        $webErr="Debes introducir un website válido";
    }else{
        $website = test_input($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
     $websiteErr = "Invalid URL";
    }
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
    Gender:
 <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
 <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
 <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other 
 <span class="error">* <?php echo $genderErr;?></span>
 <br><br>
 ¿Qué cursos quieres hacer?  <span style="color:red"><?php echo $cursosErr;?></span>
   HTML: <input type="checkbox" name="cursos[0]" value="HTML" <?php if (isset($_POST['cursos']) && isset($_POST['cursos'][0])) echo "checked";?>>
  CSS:  <input type="checkbox" name="cursos[1]" value="CSS"<?php if (isset($_POST['cursos']) && isset($_POST['cursos'][1])) echo "checked";?>>
  JS: <input type="checkbox" name="cursos[2]" value="JS" <?php if (isset($_POST['cursos']) && isset($_POST['cursos'][2])) echo "checked";?>>
 <br><br>
 <input type="submit" name="submit" value="Submit"> 
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