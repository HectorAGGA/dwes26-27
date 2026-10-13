<?php
$archivo = 'csv/plantillas.csv';
 
$columnas = ['dorsal','nombre', 'posicion'];
 
$jugadores = [];
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
 
            $jugadores[] = [
                'dorsal'        => trim($fila[$pos['dorsal']]),
                'nombre'    => trim($fila[$pos['nombre']]),
                'posicion' => trim($fila[$pos['posicion']])
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
    <title>Plantillas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>Plantillas</h1></header>

    <div class="enunciado">
        <p>Con el fichero plantillas.csv muestra en un tabla HTML la plantilla del Atlético de Madrid
        ordenada por dorsal.</p>
    </div>


<table border="1" cellpadding="4">
<thead>
    <tr><th>Dorsal</th><th>Nombre</th><th>Posicion</th></tr>
</thead>
<tbody>
<?php 
sort($jugadores);

foreach ($jugadores as $c): ?>
    <tr>
        <td><?= htmlspecialchars($c['dorsal']) ?></td>
        <td><?= htmlspecialchars($c['nombre']) ?></td>
        <td><?= htmlspecialchars($c['posicion']) ?></td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>


</body>
</html>