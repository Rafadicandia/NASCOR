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