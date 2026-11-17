
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heroes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
session_start();

if (isset($_SESSION["superheroes"])) {
    $archivo = "csv/heroes.csv";
    $filas = file($archivo);
    
    echo "<h1> Listado de Superheroes</h1>";
    if ($_SESSION["superheroes"] == "dc") {

        for ($i=0; $i < count($filas); $i++) { 

        $columnas = explode(";", $filas[$i]);
        echo "<article class='hero'>";
        for ($j=0; $j < count($columnas); $j++) { 
            if ($columnas[1] == "DC Comics") {
                if ($j <5) {
                    echo $columnas[$j] . "<br>";
                }
                
                if ($j == 5) {
                    echo "<img src='$columnas[5]'> <br>";
                }
                
            }
        }
        echo "</article>";

    }

    } else {
        for ($i=0; $i < count($filas); $i++) { 

        $columnas = explode(";", $filas[$i]);
        echo "<article class='hero'>";
        for ($j=0; $j < count($columnas); $j++) { 
            
            if ($columnas[1] == "Marvel Comics") {
                if ($j <5) {
                    echo $columnas[$j] . "<br>";
                }
                
                if ($j == 5) {
                    echo "<img src='$columnas[5]'> <br>";
                }
            
            }
        }
        echo "</article>";

    }
    
    }

}
?>    



</body>
</html>