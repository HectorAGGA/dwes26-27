<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Preferencias</title>
</head>
<body>
    <h1>Preferencias del usuario</h1>

    <form action="guarda_prefs.php" method="post">
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </p>

        <p>
            <label for="color">Color favorito:</label>
            <input type="color" id="color" name="color">
        </p>

        <p>
            <input type="submit" value="Guardar preferencias">
        </p>
    </form>

    <p><a href="index.php">Volver al inicio</a></p>
    
</body>
</html>