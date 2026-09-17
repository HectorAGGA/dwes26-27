<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contador</title>
</head>
<body>
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