<?php 
session_start();
include "CargarBD.php";

if (!isset($_SESSION['usuario'])) {
    $_SESSION['error_login'] = "no tienes un usuario";
    header("Location: login.php");
    exit();
}
echo "<a href='cerrar_sesion.php'>CERRAR SESION </a>";
 switch ($_SESSION['usuario']) {
   case 'profesor1':
        echo "ERES EL :" . $_SESSION['usuario'];
        $consulta = $pdo->query("SELECT * FROM notas");
        $consulta->execute();
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>Nombre</td>";
        echo "<td>Apellido 1</td>";
        echo "<td>Apellido 2</td>";
        echo "<td>Nota</td>";
        echo "<td>Accion</td>";
        echo "</tr>";
        while($registro = $consulta->fetch())
        {
            echo "<tr>";
            echo "<td>". $registro['nombre'] ."</td>";
            echo "<td>". $registro["apellido1"] ."</td>";
            echo "<td>". $registro["apellido2"] ."</td>";
            echo "<td>". $registro["profesor1"] ."</td>";
            echo "<td><form action='poner_nota.php' method='post'> <input type='hidden' name='profe' value='".$_SESSION['usuario'] ."'><input type='hidden' name='nota' value='".$registro["profesor1"] ."'><input type='hidden' name='ID' value='".$registro["id"] ."'><input type='hidden' name='alumno' value='".$registro["nombre"] . "'> <button type='submit'>EDITAR NOTA</button></form></td>";
            echo "</tr>";
            
        } 
        break; 
    
    case 'profesor2':
        echo "ERES EL :" . $_SESSION['usuario'];
        $consulta = $pdo->query("SELECT * FROM notas");
        $consulta->execute();
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>Nombre</td>";
        echo "<td>Apellido 1</td>";
        echo "<td>Apellido 2</td>";
        echo "<td>Nota</td>";
        echo "<td>Accion</td>";
        echo "</tr>";
        while($registro = $consulta->fetch())
        {
            echo "<tr>";
            echo "<td>". $registro['nombre'] ."</td>";
            echo "<td>". $registro["apellido1"] ."</td>";
            echo "<td>". $registro["apellido2"] ."</td>";
            echo "<td>". $registro["profesor2"] ."</td>";
            echo "<td><form action='poner_nota.php' method='post'> <input type='hidden' name='profe' value='".$_SESSION['usuario'] ."'><input type='hidden' name='nota' value='".$registro["profesor1"] ."'><input type='hidden' name='ID' value='".$registro["id"] ."'><input type='hidden' name='alumno' value='".$registro["nombre"] . "'> <button type='submit'>EDITAR NOTA</button></form></td>";
            echo "</tr>";
            
        } 
        
        break;

    case 'profesor3':
        echo "ERES EL :" . $_SESSION['usuario'];
        $consulta = $pdo->query("SELECT * FROM notas");
        $consulta->execute();
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>Nombre</td>";
        echo "<td>Apellido 1</td>";
        echo "<td>Apellido 2</td>";
        echo "<td>Nota</td>";
        echo "<td>Accion</td>";
        echo "</tr>";
        while($registro = $consulta->fetch())
        {
            echo "<tr>";
            echo "<td>". $registro['nombre'] ."</td>";
            echo "<td>". $registro["apellido1"] ."</td>";
            echo "<td>". $registro["apellido2"] ."</td>";
            echo "<td>". $registro["profesor3"] ."</td>";
            echo "<td><form action='poner_nota.php' method='post'> <input type='hidden' name='profe' value='".$_SESSION['usuario'] ."'><input type='hidden' name='nota' value='".$registro["profesor1"] ."'><input type='hidden' name='ID' value='".$registro["id"] ."'><input type='hidden' name='alumno' value='".$registro["nombre"] . "'> <button type='submit'>EDITAR NOTA</button></form></td>";
            echo "</tr>";
            
        }
        
        
        break;

    case 'profesor4':
        echo "ERES EL :" . $_SESSION['usuario'];
        $consulta = $pdo->query("SELECT * FROM notas");
        $consulta->execute();
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>Nombre</td>";
        echo "<td>Apellido 1</td>";
        echo "<td>Apellido 2</td>";
        echo "<td>Nota</td>";
        echo "<td>Accion</td>";
        echo "</tr>";
        while($registro = $consulta->fetch())
        {
            echo "<tr>";
            echo "<td>". $registro['nombre'] ."</td>";
            echo "<td>". $registro["apellido1"] ."</td>";
            echo "<td>". $registro["apellido2"] ."</td>";
            echo "<td>". $registro["profesor4"] ."</td>";
            echo "<td><form action='poner_nota.php' method='post'> <input type='hidden' name='profe' value='".$_SESSION['usuario'] ."'><input type='hidden' name='nota' value='".$registro["profesor1"] ."'><input type='hidden' name='ID' value='".$registro["id"] ."'><input type='hidden' name='alumno' value='".$registro["nombre"] . "'> <button type='submit'>EDITAR NOTA</button></form></td>";
            echo "</tr>";
            
        }
        
        break;

    case 'admin':
        echo "ERES EL :" . $_SESSION['usuario'];
        $consulta = $pdo->query("SELECT * FROM notas");
        $consulta->execute();
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>Nombre</td>";
        echo "<td>Apellido 1</td>";
        echo "<td>Apellido 2</td>";
        echo "<td>Nota p1</td>";
        echo "<td>Nota p2</td>";
        echo "<td>Nota p3</td>";
        echo "<td>Nota p4</td>";
        echo "<td>Accion 1</td>";
        echo "<td>Accion 2</td>";
        echo "<td>Accion 3</td>";
        echo "<td>Accion 4</td>";
        echo "</tr>";
        while($registro = $consulta->fetch())
        {
            echo "<tr>";
            echo "<td>". $registro['nombre'] ."</td>";
            echo "<td>". $registro["apellido1"] ."</td>";
            echo "<td>". $registro["apellido2"] ."</td>";
            echo "<td>". $registro["profesor1"] ."</td>";
            echo "<td>". $registro["profesor2"] ."</td>";
            echo "<td>". $registro["profesor3"] ."</td>";
            echo "<td>". $registro["profesor4"] ."</td>";
            echo "<td><form action='poner_nota.php' method='post'> <input type='hidden' name='profe' value='profesor1'><input type='hidden' name='nota' value='".$registro["profesor1"] ."'><input type='hidden' name='ID' value='".$registro["id"] ."'><input type='hidden' name='alumno' value='".$registro["nombre"] . "'> <button type='submit'>EDITAR NOTA 1</button></form></td>";
            echo "<td><form action='poner_nota.php' method='post'> <input type='hidden' name='profe' value='profesor2'><input type='hidden' name='nota' value='".$registro["profesor2"] ."'><input type='hidden' name='ID' value='".$registro["id"] ."'><input type='hidden' name='alumno' value='".$registro["nombre"] . "'> <button type='submit'>EDITAR NOTA 2</button></form></td>";
            echo "<td><form action='poner_nota.php' method='post'> <input type='hidden' name='profe' value='profesor3'><input type='hidden' name='nota' value='".$registro["profesor3"] ."'><input type='hidden' name='ID' value='".$registro["id"] ."'><input type='hidden' name='alumno' value='".$registro["nombre"] . "'> <button type='submit'>EDITAR NOTA 3</button></form></td>";
            echo "<td><form action='poner_nota.php' method='post'> <input type='hidden' name='profe' value='profesor4'><input type='hidden' name='nota' value='".$registro["profesor4"] ."'><input type='hidden' name='ID' value='".$registro["id"] ."'><input type='hidden' name='alumno' value='".$registro["nombre"] . "'> <button type='submit'>EDITAR NOTA 4</button></form></td>";

            echo "</tr>";
            
        }
        
        break;

    default:
        
        break;
} 

?>