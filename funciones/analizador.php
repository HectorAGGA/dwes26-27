<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>Analizador</h1></header>

<div class="enunciado">
    <p>A partir de una frase con palabras sólo separadas por espacios, devolver:
• Letras totales y cantidad de palabras
• Una línea por cada palabra indicando su tamaño
Nota: no se puede usar str_word_count</p>
    </div>

    <form action="analizadorresultado.php" method="post">
    <label for="frase">Introduce palabras separadas por espacdios</label>
    <input type="text" name="frase" id="frase">
    <button type="submit">Enviar</button>
    </form>


</body>
</html>