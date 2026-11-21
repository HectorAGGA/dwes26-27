<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form action="controlador.php" method="post">

    <input type="number" name="ID" required>
    <input type="text" name="nombre" required>
    <input type="text" name="texto1" required>
    <input type="hidden" name="accion"  value="insertar">
    
    <button type="submit">INSERTAR</button>

    </form>
<?php
include "cargarBD.php";

$consulta = $pdo->query("SELECT * FROM test1");
$consulta->execute();
?>

<table border=1>

<tr>
    <td>
        ID
    </td>
    <td>
        Nombre
    </td>
    <td>
        Texto
    </td>
    <td>
        Borrar
    </td>
    <td>
        Update
    </td>
</tr>

<?php
while($registro = $consulta->fetch())
{
echo "<tr>";
echo "<td>" . $registro['ID']."</td>";
echo "<td>" . $registro['Nombre']."</td>";
echo "<td>" . $registro['texto1']."</td>";
echo "<td><form action='controlador.php' method='post'> <input type='hidden' name='ID'  value={$registro['ID']}> <input type='hidden' name='accion'  value='borrar'> <button type='submit'><img src='img/borrar.png'></button></form></td>";
echo "<td><form action='controlador.php' method='post'> <input type='hidden' name='ID'  value={$registro['ID']}> <input type='hidden' name='accion'  value='update'> <button type='submit'><img src='img/update.png'></button></form></td>";

echo "</tr>";
}




?>
</table>



</body>
</html>