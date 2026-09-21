<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>ARRAY 1</h1></header>

    <div class="enunciado">
        <p>Rellena un array con 50 números aleatorios comprendidos entre el 0 y el 99, y luego muéstralo en una
lista desordenada. Para crear un número aleatorio, utiliza la función rand(inicio, fin) => $num = rand
(0, 99)
• Como mejora comprobar que los números no existan.
• Ordenar la salida del vector.
• Calcula:
– El mayor
– El menor
– La media</p>
    </div>

<?php


$lista = [];

while (count($lista) < 50) {
    $num = rand(0, 99);
    if (!in_array($num, $lista)) {
        $lista[] = $num;
    }
}


$ordenada = $lista;
sort($ordenada);


$mayor = max($lista);
$menor = min($lista);
$media = array_sum($lista) / count($lista);

?>

    <h2>Lista desordenada</h2>
    <ul>
        <?php foreach ($lista as $numero) { ?>
            <li><?php print $numero; ?></li>
        <?php } ?>
    </ul>

    <h2>Lista ordenada</h2>
    <ul>
        <?php foreach ($ordenada as $numero) { ?>
            <li><?php print $numero; ?></li>
        <?php } ?>
    </ul>

    <h2>Cálculos</h2>
    <ul>
        <li>El mayor: <?php print $mayor; ?></li>
        <li>El menor: <?php print $menor; ?></li>
        <li>La media: <?php print round($media, 2); ?></li>
    </ul>

</body>
</html>