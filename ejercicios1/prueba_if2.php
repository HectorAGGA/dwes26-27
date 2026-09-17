<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if_else</title>
</head>
<body>
    
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