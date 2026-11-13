<?php 
if (isset($_COOKIE["nombreusu"]) and isset($_COOKIE["colorusu"])) {
    $fondo = htmlspecialchars($_COOKIE["colorusu"]);

} else {
    $fondo = 'white';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style= "background-color : <?= htmlspecialchars($fondo) ?> ">
<?php 

    if ($fondo != 'white') {
        echo "Bienvenido: " . $_COOKIE["nombreusu"];
        echo "<button><a href='borrar_prefs.php'>Borrar preferencias</a></button>";
    
    } else {
        echo "Pagina de inicio";
    }
?>
<button><a href="preferencias.php">Ir a preferencias</a></button>
</body>
</html>