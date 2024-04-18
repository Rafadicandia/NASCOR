<?php
session_start();
$aviso = "Si quieres subir tus posts haz clic <a class='button href='login.html'>login</a>";
if (isset($_GET['logout'])){
    session_destroy();
    header ("location: tablanoticias.php");
}

function user ($user_email, $password)
{
    $mail = 'unUsuario';
    $pass = 'unPassword';
    if ($user_email == $mail || $pass == $password) {
        $_SESSION['user'] = $user_email;
    return true;
}else{
    return false;
}
}
?>
//funncion para parsear credenciales

function parse_credentials($file)
{
  $datos = parse_ini_file($file);
  $host = $datos['host'];
  $user = $datos['user'];
  $password = $datos['password'];
  $smtp_password = $datos['smtpPassword'];

  return array($host, $user, $password,$smtp_password);
}