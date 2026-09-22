<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array asociativo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>Personas</h1></header>

    <div class="enunciado">
        <p>Mediante un array bidimensional, almacena el nombre, altura y email de 5 personas. Para ello, crea
un array de personas, siendo cada persona un array asociativo: [ [‘nombre’=>‘Aitor’, ‘altura’=>182,
‘email’=>‘aitor@correo.com’],[…],… ] Posteriormente, recorre el array y muéstralo en una tabla
HTML.</p>
    </div>

<?php 

$personas = [
    ['nombre' => 'Aitor',  'altura' => 182, 'email' => 'aitor@correo.com'],
    ['nombre' => 'Laura',  'altura' => 165, 'email' => 'laura@correo.com'],
    ['nombre' => 'Marcos', 'altura' => 178, 'email' => 'marcos@correo.com'],
    ['nombre' => 'Elena',  'altura' => 170, 'email' => 'elena@correo.com'],
    ['nombre' => 'Sofia',  'altura' => 160, 'email' => 'sofia@correo.com'],
];

?>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Altura</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($personas as $persona): ?>
        <tr>
            <td><?= $persona['nombre'] ?></td>
            <td><?= $persona['altura'] ?> cm</td>
            <td><?= $persona['email'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>