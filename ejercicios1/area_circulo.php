<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>area cirulo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
$radio = 3.5;
define('PI', 3.1416);

$resultado = PI*($radio*$radio);

?>
    <header><h1>CALCULO DE UN AREA DE UN CIRCULO</h1></header>
    
    <div id="datos">
        <h3>DATOS DE LOS QUE DISPONEMOS:</h3>
        <ul>
            <li> RADIO: <?= $radio ?> </li>
            <li> PI: <?= PI ?></li>
        </ul>
    </div>

    <div id="formula">
        <h3>FORMULA QUE VAMOS A UTILIZAR:</h3>        
        <p>PI * R<sup>2 </sup></p>
    
    </div>
    <h3>RESULTADO:</h3>
    <p>El area del circulo es: <?= $resultado ?> </p>




</body>
</html>