<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>frase impares</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>Frase Impares Resultado</h1></header>

<div class="enunciado">
        <p>Lee una frase y devuelve una nueva con solo los caracteres de las posiciones impares</p>
    </div>

    <?php 
    $frase = $_POST["frase"];

    $frase = trim($frase);
    $frase = explode(" ", $frase);
    $aux = "";
    

    for ($i=0; $i < count($frase); $i++) { 
        for ($j=0; $j < strlen($frase[$i]); $j++) { 
            if ($j %2 == 0) {
                $aux .= $frase[$i][$j];
            }
        }
        $aux .= " ";
    }

    
    echo trim($aux);
    
    
    ?>


</body>
</html>