<?php
session_start();

if (isset($_POST['nombre'])) {
    $_SESSION['alumnos'][trim($_POST['nombre'])] = [
        'nota1' => $_POST['nota1'],
        'nota2' => $_POST['nota2'],
        'nota3' => $_POST['nota3'],
    ];
}

header("Location: calificaciones.php");
exit;