<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array bidimensional</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>Array bidimensional</h1></header>

    <div class="enunciado">
        <p>Rellena un array bidimensional de 6 filas por 9 columnas con números aleatorios comprendidos entre
100 y 999 (ambos incluidos). Todos los números deben ser distintos, es decir, no se puede repetir
ninguno. Muestra a continuación por pantalla el contenido del array de tal forma que:
• La columna del máximo debe aparecer en azul.
• La fila del mínimo debe aparecer en verde.
• El resto de números deben aparecer en negro./p>
    </div>

<?php 

$numeros = [];


for ($i=0; $i <6 ; $i++) { 
    for ($j=0; $j <9; $j++) { 
        $numeros[$i][$j]= rand(100,999);
    }
}
 $maximo = max(max($numeros));
 $minimo = min(min($numeros));

?>

<table border="1" cellpadding="8" cellspacing="0">
    <tbody>
        <?php for ($i = 0; $i < count($numeros); $i++): ?>
            <tr>
                <?php for ($j = 0; $j < count($numeros[$i]); $j++): 
                    if ($numeros[$i][$j] == $maximo) {
                        echo "<td>" . $numeros[$i][$j] . "</td>";
                    } else {
                        echo "<td>" . $numeros[$i][$j] . "</td>";
                    }
                    ?>
                    
                    
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>



</body>
</html>