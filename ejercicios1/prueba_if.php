<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if_else</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>PRUEBA IF 1 (Nota mayor entre 2)</h1></header>
    <div class="enunciado">
        <p>Crea una página llamada prueba_if.php en la carpeta de ejercicios del tema. Crea en
ella dos variables llamadas $nota1 y $nota2, y dales el valor de dos notas de examen
cualesquiera (con decimales si quieres). Después, utiliza expresiones if..else para determinar qué nota es la mayor de las dos.</p>
    </div>
<?php 
$nota1 = 2;

$nota2 = 3.7;

if ($nota1> $nota2) {
    echo "<p>La nota 1 es mayor que la nota 2</p>";
} else {
    echo"<p>La nota 2 es mayor</p>";
}

?>


</body>
</html>
