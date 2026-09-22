<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>garaje</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>Garaje</h1></header>

    <div class="enunciado">
        <p>Crea una página llamada garaje.php. Define dentro un array bidimensional mixto donde:
La primera dimensión sea asociativa. Aquí pondremos matrículas de coches. La segunda dimensión
será numérica. En cada casilla guardaremos la marca, modelo y número de puertas del coche en
cuestión. Por ejemplo, el coche con matrícula “111BCD” puede ser un “Ford” (casilla 0), modelo “Focus” (casilla 1) de 5 puertas (casilla 2). Rellena el array con al 
menos 3 o 4 coches, y después utiliza las
estructuras adecuadas para recorrerlo mostrando los datos de los coches ordenados por matrícula.</p>
    </div>

<?php 

$garaje = [
'4686CVN' => ['Peugeot' , '307' , 3 ],
'1111ABC'=> ['Ford', 'Fiesta' , 5],
'2222ABC' => ['Audi', 'A3' , 5],
];

ksort($garaje);
?>

 <table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Matricula</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Nº Puertas</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($garaje as $matricula => $coche): ?>
        <tr>
            <td><?= $matricula ?></td>
            <td><?= $coche[0] ?></td>
            <td><?= $coche[1] ?></td>
            <td><?= $coche[2] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>