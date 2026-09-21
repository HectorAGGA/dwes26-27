<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info basica</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="enunciado">
        <p>Para este ejercicio, crea un documento en esta carpeta llamado info_basica.php, similar al del ejemplo anterior, pero mostrando tu nombre y tu año de nacimiento usando variables. Es decir, crearás dos variables para almacenar estos dos datos, y los
        mostrarás en una frase que diga “Me llamo XXXX y nací en el año YYYY”.</p>
    </div>
    <?php 
    $nombre = "Héctor Aguilera";
    $anyo = 2007;
    
    ?>
    <p>Me llamo <?php print $nombre; ?> y nací 
    el año <?php print $anyo; ?>.</p>

</body>
</html>