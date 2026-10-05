<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>Login</h1></header>

    <div class="enunciado">
        <p>
Vamos a simular un formulario de acceso:
login.php: el formulario de entrada, que solicita el usuario y contraseña. compruebaLogin
.php: recibe los datos y comprueba si son correctos (los usuarios se guardan en un array asociativo) pasando el control mediante el uso de include a:
ok.php: El usuario introducido es correcto
ko.php: El usuario es incorrecto. Informar si ambos están mal o solo la contraseña. Volver a
mostrar el formulario de acceso.</p>
    </div>
    <div class="card">
        <h1>Login</h1>
        <form action="compruebaLogin.php" method="POST">
            <div>
                <label for="usuario">Usuario: </label><br>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <br>
            <div>
                <label for="contra">Contraseña: </label><br>
                <input type="text" id="contra" name="contra" required>
            </div>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </div>

<?php


?>

</body>
</html>