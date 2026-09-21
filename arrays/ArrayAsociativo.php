<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array asociativo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>ARRAY ASOOCIATIVO</h1></header>

    <div class="enunciado">
        <p>Rellena un array de 100 elementos de manera aleatoria con valores M o F (por ejemplo [“M”, “M”, “F”,
“M”, …]). Una vez completado, vuelve a recorrerlo y calcula cuantos elementos hay de cada uno de los
valores almacenando el resultado en un array asociativo [‘M’ => 44, ‘F’ => 66] (no utilices variables
para contar las M o las F). Finalmente, muestra el resultado por pantalla</p>
    </div>

<?php 

$lista = [];
$num = 0;

for ($i=0; $i < 100 ; $i++) { 
    $num = rand(1,2);
    if ($num == 1) {
        $lista[] = "M";
    } else {
        $lista[] = "F";
    }
}

$conteo = ['M' => 0, 'F' => 0];

foreach ($lista as $valor) {
    $conteo[$valor]++;
}

print_r($conteo);


?>
</body>
</html>