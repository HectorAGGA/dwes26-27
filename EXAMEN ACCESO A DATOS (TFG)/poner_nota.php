<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    $_SESSION['error_login'] = "no tienes un usuario";
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poner nota</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
<form action="guardar_nota.php">


<label for="">ALUMNO/A:<?php echo $_REQUEST['alumno'];?></label>
<br>
<label for="">Nota:</label>
<input name= "nota_edit" type="number" step="0.01" min="0.00" max="10.00" value="<?php echo $_REQUEST['nota'];?>" >
<input type="hidden" name="id" value="<?php echo $_REQUEST['ID'];?>">
<input type="hidden" name="profe" value="<?php echo $_REQUEST['profe'];?>">
<button type="submit">EDITAR</button>

</form>


</body>
</html>