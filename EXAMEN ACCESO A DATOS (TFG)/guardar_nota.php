<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    $_SESSION['error_login'] = "no tienes un usuario";
    header("Location: login.php");
    exit();
}

include "CargarBD.php";


switch ($_REQUEST['profe']) {
    case 'profesor1':
        try {
$sql = "UPDATE notas SET profesor1 = :nota WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['nota' => $_REQUEST["nota_edit"], 'id' => $_REQUEST["id"]]);



} catch (\PDOException $e) {
echo "Error: " . $e->getMessage();
}
    break;
    case 'profesor2':
    try {
$sql = "UPDATE notas SET profesor2 = :nota WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['nota' => $_REQUEST["nota_edit"], 'id' => $_REQUEST["id"]]);



} catch (\PDOException $e) {
echo "Error: " . $e->getMessage();
}

    break;
    case 'profesor3':
    try {
$sql = "UPDATE notas SET profesor3 = :nota WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['nota' => $_REQUEST["nota_edit"], 'id' => $_REQUEST["id"]]);



} catch (\PDOException $e) {
echo "Error: " . $e->getMessage();
}

    break;
    case 'profesor4':
    try {
$sql = "UPDATE notas SET profesor4 = :nota WHERE id = :id"; 
$stmt = $pdo->prepare($sql);
$stmt->execute(['nota' => $_REQUEST["nota_edit"], 'id' => $_REQUEST["id"]]);



} catch (\PDOException $e) {
echo "Error: " . $e->getMessage();
}

    break;
    default:
        
        break;
}

header("Location:vista.php");
