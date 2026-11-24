<?php 
session_start();

if (isset($_SESSION["error_login"])) {
    echo $_SESSION["error_login"];
    $_SESSION["error_login"] = "";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    
<form action="comprobar_login.php" method="post">
<label for="">Uusuario</label>
<input type="text" name="nombre" id="">
<label for="">Contraseña</label>
<input type="text" name="pswd">
<button type="submit">ENTRAR</button>
</form>




</body>
</html>












