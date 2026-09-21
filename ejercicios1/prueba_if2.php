<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if_else</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>PRUEBA IF 2 (Nota mayor entre 3)</h1></header>
    <div class="enunciado">
        <p>CModifica el ejercicio anterior añadiendo una tercera nota $nota3 , y determinando cuál
de las 3 notas es ahora la mayor. Para ello, deberás ayudarte esta vez de la estructura
if..elseif..else.</p>
    </div>    

<?php 
$nota1 = 2;

$nota2 = 3.7;
$nota3 = 4.7;

if ($nota1> $nota2 and $nota1> $nota3) {
    echo "<p>La nota 1 es mayor que la nota 2</p>";
} else if($nota2> $nota3 and $nota2> $nota1){
    echo"<p>La nota 2 es mayor</p>";
} else {
    echo"<p>La nota 3 es mayor</p>";
}

?>


</body>
</html>