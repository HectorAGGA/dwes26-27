<?php
$archivo = 'csv/casas_rurales.csv';
 
$columnas = ['id', 'localidad', 'nombre', 'telefono'];
 
$casas = [];
$descartadas = 0;
$error = '';
 
if (!file_exists($archivo)) {
    $error = "No se encuentra el archivo $archivo";
} else {
    $fh = fopen($archivo, 'r');
 
    $primera = fgets($fh);
    $sep = (substr_count($primera, ';') >= substr_count($primera, ',')) ? ';' : ',';
    rewind($fh);
 
    $cabecera = fgetcsv($fh, 0, $sep);
    $cabecera[0] = preg_replace('/^\xEF\xBB\xBF/', '', $cabecera[0]);
    $cabecera = array_map(fn($c) => mb_strtolower(trim($c)), $cabecera);

    $pos = [];
    foreach ($columnas as $col) {
        $i = array_search($col, $cabecera);
        if ($i === false) {
            $error = "No existe la columna '$col' en el CSV. Columnas encontradas: " . implode(', ', $cabecera);
            break;
        }
        $pos[$col] = $i;
    }
 
    if ($error === '') {
        while (($fila = fgetcsv($fh, 0, $sep)) !== false) {
            if ($fila === [null]) continue; // línea vacía
 
            $telefono = trim($fila[$pos['telefono']] ?? '');
 
            // Teléfono nulo / vacío -> descartar
            if ($telefono === '' || strtolower($telefono) === 'null') {
                $descartadas++;
                continue;
            }
 
            $casas[] = [
                'id'        => trim($fila[$pos['id']]),
                'localidad' => trim($fila[$pos['localidad']]),
                'nombre'    => trim($fila[$pos['nombre']]),
                'telefono'  => $telefono,
            ];
        }
    }
    fclose($fh);
}
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casas Rurales</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>Casas Rurales</h1></header>

<div class="enunciado">
    <p>Crea un programa llamado CasasRuralesTelefonos.php que cargue los datos de este
archivo CSV de casas rurales de la provincia de Castellón.
Queremos quedarnos con el id, localidad, nombre y telefono de las casas rurales que tengan un
teléfono definido, descartando el resto.
El programa debe mostrar por pantalla el listado final procesado, y cuántas casas rurales se
han descartado por tener datos nulos./p>
    </div>
    <?php if ($error !== ''): ?>
    <p class="error"><?= htmlspecialchars($error) ?></p>
<?php else: ?>
    <table border="1" cellpadding="4">
        <thead>
            <tr><th>ID</th><th>Localidad</th><th>Nombre</th><th>Teléfono</th></tr>
        </thead>
        <tbody>
        <?php foreach ($casas as $c): ?>
            <tr>
                <td><?= htmlspecialchars($c['id']) ?></td>
                <td><?= htmlspecialchars($c['localidad']) ?></td>
                <td><?= htmlspecialchars($c['nombre']) ?></td>
                <td><?= htmlspecialchars($c['telefono']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
 
    <p>Casas rurales mostradas: <strong><?= count($casas) ?></strong></p>
    <p>Casas rurales descartadas por tener el teléfono nulo: <strong><?= $descartadas ?></strong></p>
<?php endif; ?>
    


</body>
</html>