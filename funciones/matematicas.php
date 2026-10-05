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
        <p>Añade las siguientes funciones:
• digitos(int $num): int → devuelve la cantidad de dígitos de un número.
• digitoN(int $num, int $pos): int → devuelve el dígito que ocupa, empezando
por la izquierda, la posición $pos.
• quitaPorDetras(int $num, int $cant): int → le quita por detrás (derecha)
$cant dígitos.
• quitaPorDelante(int $num, int $cant): int → le quita por delante (izquierda)
$cant dígitos.</p>
    </div>

<?php
$x = 1;
function digitos(int $num){
    $aux;
    if ($num == 0) {
        echo "tiene 1 digito";
        return;
    }
    while ($num > 0) {
        $num = (int)($num/10);
        $aux++;
    }
    echo "tiene " . $aux . " digitos";
}

digitos($x);
?>

</body>
</html>