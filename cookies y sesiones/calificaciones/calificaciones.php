<?php session_start()?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calificaciones</title>
</head>
<body>
    <h1>Calificación Alumnos</h1>

    <form action="añadir.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre alumno" required>
        <input type="number" name="nota1" placeholder="Nota 1" min="0" max="10" step="0.01" required>
        <input type="number" name="nota2" placeholder="Nota 2" min="0" max="10" step="0.01" required>
        <input type="number" name="nota3" placeholder="Nota 3" min="0" max="10" step="0.01" required>
        <input type="submit" value="Añadir">
    </form>

    <h2>Lista de Alumnos</h2>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Primer</th>
            <th>Segundo</th>
            <th>Tercer</th>
            <th>Media</th>
        </tr>
        <?php foreach ($_SESSION['alumnos'] as $nombre => $notas): ?>
<tr>
    <td><?= htmlspecialchars($nombre) ?></td>
    <td><?= $notas['nota1'] ?></td>
    <td><?= $notas['nota2'] ?></td>
    <td><?= $notas['nota3'] ?></td>
    <td><?= round(($notas['nota1'] + $notas['nota2'] + $notas['nota3']) / 3, 2) ?></td>
</tr>
<?php endforeach; ?>
    </table>

    <p><a href="borrar.php">Borrar notas...</a></p>
</body>
</html>