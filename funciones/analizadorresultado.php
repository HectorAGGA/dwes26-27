<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>Analizador Resultado</h1></header>

<div class="enunciado">
    <p>A partir de una frase con palabras sólo separadas por espacios, devolver:
• Letras totales y cantidad de palabras
• Una línea por cada palabra indicando su tamaño
Nota: no se puede usar str_word_count</p>
    </div>

    <?php 
    $frase = $_POST["frase"];

    $cont = 0;


    $frase = trim($frase);

    for ($i=0; $i < strlen($frase); $i++) { 
        if ($frase[$i] == " ") {
            $cont++;
        }
    }
    $total = strlen($frase)-$cont ;
    echo "La cantidad de letras totales es: " . $total;
/*
    $frase = explode(" ", $frase);
    $aux = "";
    

    for ($i=0; $i < count($frase); $i++) { 
        
       
    }

    
    echo trim($aux);
    
    */
    ?>


</body>
</html>