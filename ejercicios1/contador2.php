<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contador</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>CONTADOR 2</h1></header>
    <div class="enunciado">
        <p>Modifica el ejercicio anterior y añádele algún h1 y párrafos explicativos a la página, fuera
del código PHP, explicando lo que se va a hacer. Por ejemplo, que te quede algo así: Al
final debe quedarte algo como esto:
Contadores
Este contador va del 1 al 100:
1,2,3,4,5,6,7,8,9,10,11,12,13,14,15…
Este otro va del 10 al 0:
10-9-8-7-6-5-4-3-2-1-0</p>
    </div> 
    <h1>Este contador va del 1 al 100</h1>
<?php 

for ($i=1; $i < 101; $i++) { 
    if ($i == 50) {
        echo "<br>";
    }
   
    if ($i == 100) {
        print $i . ".";
    } else {
    print $i . ",";
    }
}

?>
<br>
<h1>Este contador va del 10 al 0</h1>
<br>
<?php
$a = 10;
while ($a >= 0) {
    if ($a == 0) {
        print $a . ".";
    } else {
    print $a . "-";
    }
    $a--;
}

?>
</body>
</html>