<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contador</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>CONTADOR 1</h1></header>
    <div class="enunciado">
        <p>Crea una página llamada contador.php en la carpeta de ejercicios del tema. Utiliza una
estructura for para contar los números del 1 al 100 (separados por comas), y luego una
estructura while para contar los números del 10 al 0 (una cuenta atrás, separada por
guiones).
Al final debe quedarte algo como esto:
1,2,3,4,5,6,7,8,9,10,11,12,13,14,15…
10-9-8-7-6-5-4-3-2-1-0</p>
    </div> 
<?php 

for ($i=1; $i < 101; $i++) { 
    if ($i == 50) {
        echo "<br>";
    }
   
    if ($i == 100) {
        print $i;
    } else {
    print $i . ",";
    }
}

echo "<br><br>";
$a = 10;
while ($a >= 0) {
    if ($a == 0) {
        print $a;
    } else {
    print $a . "-";
    }
    $a--;
}

?>
</body>
</html>