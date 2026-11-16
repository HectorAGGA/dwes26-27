<?php
session_start();
$total = 0;

const ARTICULOS = array(
    array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
    array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
    array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
    array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio" => 20)
);

function add($id) {
    foreach (ARTICULOS as $art) {
        if ($art["id"] == $id) {
            $_SESSION["carro"][] = array(
                "id" => $art["id"],
                "nombre" => $art["nombre"],
                "precio" => $art["precio"]
            );
            break;
        }
    }
}

function destroy() {
    unset($_SESSION["carro"]);
}

$action = $_GET["action"] ?? "";

if ($action === "add") {
    add((int)($_GET["id"] ?? 0));
} elseif ($action === "destroy") {
    destroy();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
</head>
<body>

<ul>
<?php foreach (ARTICULOS as $art): ?>
    <li>
        <a href="carro.php?action=add&id=<?php echo $art['id']; ?>">
            <?php echo $art['nombre'] . " - " . $art['precio']; ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>

<h3>Carro</h3>
<ul>
<?php foreach ($_SESSION["carro"] ?? [] as $art): ?>
    <li>
        <?php
        echo "{$art['nombre']} - {$art['precio']}";
        $total += $art['precio'];
        ?>
    </li>
<?php endforeach; ?>
</ul>

<?php
if ($total > 0) {
    echo "El total es: " . $total . "<br>";
}
?>
<a href="carro.php?action=destroy">Borrar</a>

</body>
</html>