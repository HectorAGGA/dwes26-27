<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$estudios_va = "Tinc d'estudis l'ESO, el SMR i estic estudiant el DAW";
$estudios_en = "My education includes ESO (compulsory secondary education) and SMR, and I'm currently studying DAW";
$estudios_es = "Tengo de estudios la ESO, SMR y estoy estudiando DAW";
$idioma = "va";
$estudios = "estudios_" . $idioma;

$idiomas_va = "Parle espanyol natiu, valencià alt i anglés mitjà-alt";
$idiomas_en = "I speak native Spanish, advanced Valencian, and upper-intermediate English";
$idiomas_es = "Hablo español nativo, valenciano alto y ingles medio-alto";
$idioma = "va";
$idiomas = "idiomas_" . $idioma;

echo $$estudios;
echo "<br>";
echo $$idiomas;

?>
</body>
</html>