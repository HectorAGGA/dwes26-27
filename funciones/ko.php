<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KO</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>KO</h1></header>
<h1>Acceso incorrecto</h1>

<?php

if ($error == "usuario") {

    echo "<p>El usuario y la contraseña son incorrectos.</p>";

} else {

    echo "<p>El usuario es correcto, pero la contraseña es incorrecta.</p>";

}

?>

<h2>Volver a intentar</h2>

<form action="compruebaLogin.php" method="POST">
            <div>
                <label for="usuario">Usuario: </label><br>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <br>
            <div>
                <label for="contra">Contraseña: </label><br>
                <input type="password" id="contra" name="contra" required>
            </div>
            <br>
            <button type="submit">Enviar</button>
        </form>
</form>

</body>
</html>
