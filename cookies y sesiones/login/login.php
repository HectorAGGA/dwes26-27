<?php
session_start();

$error = "";

// Solo procesamos si el formulario se ha enviado (método POST)
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $login = trim($_POST["login"] ?? "");
    $password = trim($_POST["password"] ?? "");

    $valido = false;

    // Leemos el fichero línea a línea, ignorando líneas vacías
    $lineas = file("usuarios.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lineas as $linea) {
        // Separamos login y password por ":"
        $partes = explode(":", trim($linea));

        if (count($partes) === 2) {
            list($usuFichero, $passFichero) = $partes;

            if ($login === $usuFichero && $password === $passFichero) {
                $valido = true;
                break; // Ya lo hemos encontrado, no seguimos
            }
        }
    }

    if ($valido) {
        $_SESSION["loginusu"] = $login;
        header("Location: index.php");
        exit;
    } else {
        $error = "El login o la contraseña son incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Iniciar sesión</h1>

    <?php if ($error !== ""): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="login.php" method="post">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login"><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>