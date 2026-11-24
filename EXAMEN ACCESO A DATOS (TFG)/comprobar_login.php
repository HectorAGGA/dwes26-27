<?php
session_start();

$usuarios = ["admin","profesor1","profesor2","profesor3","profesor4"];
$contraseña = "1234";



foreach ($usuarios as $usu ) {
  if ($_REQUEST['nombre'] == $usu and $_REQUEST['pswd'] == $contraseña) {
    $_SESSION['usuario'] = $usu;
    header("Location: vista.php");
    exit();
}

}
$_SESSION["error_login"] = "contraseña o usuario incorrecto";
header("Location: login.php");
?>