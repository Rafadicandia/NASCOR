><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="uploader.php" method="post" enctype="multipart/form-data">
   <input type="file" name="archivo" id="archivo">
   <input type="submit" value="Upload Image" name="submit">
</form>
<?php


if (isset($_FILES["archivo"])){
    $imageName=$_FILES["archivo"]["name"];
 if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $imageName)){
	echo "<h1> Genial!</h1>";
    }else{
	echo "No se ha podido subir";
    }
}

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


?>

</body>
</html>