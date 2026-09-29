<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parametros Variables</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>Parametros Variables</h1></header>

    <div class="enunciado">
        <p>Crea las siguientes funciones:
Una función que devuelva el mayor de todos los números recibidos como parámetro variables:
function mayor(): int. Utiliza las funciones func_get_args(), etc…
No puedes usar la función max().</p>
    </div>

<?php

function mayor(): int
{
    if (func_num_args() === 0) {
        echo "Tienes que poner almenos un numero";
        return null;
    }

    $mayor = func_get_arg(0);

    foreach (func_get_args() as $numero) {
        if ($numero > $mayor) {
            $mayor = $numero;
        }
    }

    return $mayor;
} 
$resultado = mayor(1,2,-4,167);
echo "El numero mayor es " . $resultado;
?>

</body>
</html>