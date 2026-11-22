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
    <label for="nombre">NOMBRE:</label>
    <input type="text" name="nombre" required>
    <label for="texto1">TEXTO:</label>
    <input type="text" name="texto1" required>
    <input type="hidden" name="accion"  value="insertar">
    
    <button type="submit">INSERTAR</button>

    </form>
<?php
include "cargarBD.php";

$consulta = $pdo->query("SELECT * FROM test1");
$consulta->execute();



$flag = false;

if (isset($_REQUEST['bandera'])) {
$actu = $pdo->query("SELECT * FROM test1 WHERE ID LIKE '{$_REQUEST['id']}'");
$actu->execute();

$datos = $actu->fetch();
$flag = true;
}

if ($flag) { $flag=false;?>
<form action="controlador.php" method="post">
    <label for="nombre">NOMBRE:</label>
    <input type='hidden' name='ID'  value= <?= $_REQUEST['id']?>>
    <input type="text" name="nombre" value="<?= $datos['Nombre']?>" required>
    <label for="texto1">TEXTO:</label>
    <input type="text" name="texto1" value="<?= $datos['texto1']?>" required>
    <input type="hidden" name="accion"  value="update">
    
    <button type="submit">ACTUALIZAR</button>

    </form>

<?php }
?>

<table border=1>
<tr>
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
echo "<td>" . $registro['Nombre']."</td>";
echo "<td>" . $registro['texto1']."</td>";
echo "<td><form action='controlador.php' method='post'> <input type='hidden' name='ID'  value={$registro['ID']}> <input type='hidden' name='accion'  value='borrar'> <button type='submit'><img src='img/borrar.png'></button></form></td>";
echo "<td><form action='vista.php' method='post'> <input type='hidden' name='id'  value={$registro['ID']}> <input type='hidden' name='bandera'  value='true'> <input type='hidden' name='accion'  value='update'> <button type='submit'><img src='img/update.png'></button  ></form></td>";

echo "</tr>";
}




?>
</table>



</body>
</html>