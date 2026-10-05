```php
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matematicas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header><h1>matematicas</h1></header>

<div class="enunciado">
    <p>
        Añade las siguientes funciones:<br>
        • digitos(int $num): int → devuelve la cantidad de dígitos de un número.<br>
        • digitoN(int $num, int $pos): int → devuelve el dígito que ocupa, empezando
        por la izquierda, la posición $pos.<br>
        • quitaPorDetras(int $num, int $cant): int → le quita por detrás (derecha)
        $cant dígitos.<br>
        • quitaPorDelante(int $num, int $cant): int → le quita por delante (izquierda)
        $cant dígitos.
    </p>
</div>

<?php

$x = 12345;


function digitos(int $num): int {

    $aux = 0;

    if ($num == 0) {
        return 1;
    }

    if ($num < 0) {
        $num = -$num;
    }

    while ($num > 0) {
        $num = (int)($num / 10);
        $aux++;
    }

    return $aux;
}

function digitoN(int $num, int $pos): int {

    $num = abs($num);

    $digitos = digitos($num);

    if ($pos < 1 || $pos > $digitos) {
        return -1;
    }

    for ($i = 0; $i < $digitos - $pos; $i++) {
        $num = (int)($num / 10);
    }

    return $num % 10;
}


function quitaPorDetras(int $num, int $cant): int {

    if ($cant <= 0) {
        return $num;
    }

    for ($i = 0; $i < $cant; $i++) {
        $num = (int)($num / 10);
    }

    return $num;
}


function quitaPorDelante(int $num, int $cant): int {

    $digitos = digitos($num);

    if ($cant <= 0) {
        return $num;
    }

    if ($cant >= $digitos) {
        return 0;
    }

    // Calculamos cuántos dígitos quedan
    $quedan = $digitos - $cant;

    // Calculamos 10 elevado a los dígitos que quedan
    $divisor = 1;

    for ($i = 0; $i < $quedan; $i++) {
        $divisor = $divisor * 10;
    }

    return $num % $divisor;
}


echo "<h2>Número: " . $x . "</h2>";

echo "Cantidad de dígitos: " . digitos($x) . "<br>";

echo "Dígito en la posición 1: " . digitoN($x, 1) . "<br>";

echo "Quitando 2 dígitos por detrás: " . quitaPorDetras($x, 2) . "<br>";

echo "Quitando 2 dígitos por delante: " . quitaPorDelante($x, 2) . "<br>";

?>

</body>
</html>