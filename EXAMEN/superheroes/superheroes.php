<?php 
session_start();


$error = "";

// Solo procesamos si el formulario se ha enviado (método POST)
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $login = trim($_POST["login"] ?? "");
    $password = trim($_POST["password"] ?? "");

    $valido = false;

    $lineas = file("usu.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lineas as $linea) {
        $partes = explode(":", trim($linea));

        if (count($partes) === 2) {
            list($usuFichero, $passFichero) = $partes;
            if ($login === $usuFichero && $password === $passFichero) {
                $valido = true;
                break;
            }
        }
    }

    if ($valido) {
        $_SESSION["superheroes"] = $login;
        header("Location: mostrar.php");
        exit;
    } else {
        $error = "El login o la contraseña son incorrectos";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="superheroes.php" method="post">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login"><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" value="Entrar">
    </form>
    
</body>
</html>







