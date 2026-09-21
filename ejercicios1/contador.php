<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contador</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
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