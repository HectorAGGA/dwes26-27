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
        <p>Crea una variable de texto con una hora en ella (por ejemplo, “21:30:12”), y luego procésala
para extraer por separado la hora, el minuto y el segundo, y comprobar si es una hora válida.
Por ejemplo, la hora anterior sí debería ser válida, pero si ponemos “12:63:11” no debería serlo,
porque 63 no es un minuto válido.</p>
    </div>

<?php

$hora = "12:20:00";



function comprobarHora(string $hora)
{
$aux = explode(":",$hora);


}

comprobarHora($hora);
?>

</body>
</html>