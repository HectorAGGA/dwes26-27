
<?php
include "cargarBD.php";


$accion = $_REQUEST["accion"];


switch ($accion) {
    case 'insertar':
        $sql = "INSERT INTO test1 (ID, Nombre, texto1) VALUES (:ID, :Nombre, :texto1)";

        $insercion = $pdo->prepare($sql);

        $insercion->execute([
            ':ID' => $_REQUEST['ID'],
            ':Nombre' => $_REQUEST['nombre'],
            ':texto1' => $_REQUEST['texto1']
            ]);
        echo "Insertada la ID "  . $_REQUEST['ID'];
        break;


    case 'borrar' :
        try {
            $sql = "DELETE FROM test1 WHERE ID = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['id' => $_REQUEST['ID']]);
            echo "borrada la ID " . $_REQUEST['ID'];
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        break;
    case 'update' :
        $sql = "UPDATE test1 SET Nombre = :Nombre, texto1 = :texto1 WHERE ID = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $_REQUEST['ID'], 'Nombre' => $_REQUEST['nombre'], 'texto1' => $_REQUEST['texto1']], );
        break;
    default:

        break;
}

header("Location: vista.php");

?>
