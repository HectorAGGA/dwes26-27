<?php 
include("productos.php");
class Inventario{

private $productos = [];

public function __construct($productos){
        $this->productos = $productos;

}
public function prod(){

    return $this->productos;

}

public function calcularStock(){
    $total = 0;
    foreach ($this->productos as $p) {
        
       $precio = $p->__get("precio");
    $stock = $p->__get("stock");
       $total = $total + ( $precio * $stock);

    }

    return $total;


}

public function buscar($id){

    foreach ($this->productos as $p) {
        
       if ($id == $p->__get("id")) {
        echo $p->__get("nombre");
       }

    }


}

public function nombres(){
foreach ($this->productos as $p) {
        
       echo $p->__get("nombre") . "<br>";

    }



}

public function categorias(){
$aux = [];
foreach ($this->productos as $p) {
$flag = true;
    if (count($aux)>0) {
        
        for ($i=0; $i < count($aux); $i++) { 
            if ($p->__get("categoria") == $aux[$i]) {
                $flag = false;
            }
        }
    }
    if ($flag) {
        $aux[] = $p->__get("categoria");
    }
    
}

for ($i=0; $i < count($aux); $i++) { 
    echo $aux[$i] . "<br>";
}


}



}

$datosDeEntrada = [ ["id" => 1, "nombre" => "Portátil Gaming", "precio" => 1199.99, "stock" => 10, "categoria" => "Electrónica"], ["id" => 2, "nombre" => "Ratón Inalámbrico", "precio" => 45.50, "stock" => 3, "categoria" => "Electrónica"], ["id" => 3, "nombre" => "Teclado Mecánico", "precio" => 89.90, "stock" => 0, "categoria" => "Electrónica"], ["id" => 4, "nombre" => "Silla de Oficina", "precio" => 150.00, "stock" => 7, "categoria" => "Muebles"], ["id" => 5, "nombre" => "Cafetera Express", "precio" => 79.95, "stock" => 12, "categoria" => "Electrodomésticos"] ];
$arrayAux = [];

foreach ($datosDeEntrada as $d) {
    $aux = new productos($d["id"],$d["nombre"],$d["precio"], $d["stock"],$d["categoria"]);
    $arrayAux[] = $aux;

}
$inventario = new Inventario($arrayAux);

$stockcalculado = $inventario->calcularStock();





?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> <div>
    <article id ="cat"> <h2>Categorias</h2>
        <?= $inventario->categorias(); ?> </article>
    <article id ="stock"> 
        <h2>Total Stock</h2>    
    <?= $stockcalculado ?> </article>
    </div>
    <article id ="tabla">
    <table border=1>

    <tr>
        <td>
            ID
        </td>
        <td>Nombre</td>
        <td>categoria</td>
        <td>Precio</td>
        <td>Stock</td>
        <td>Clasificacion</td>
    </tr>
        <?php foreach ($inventario->prod() as $p) {  
                $p->clasificar();
        echo "<tr>";
        echo "<td>" . $p->__get("id") . "</td>";
        echo "<td>" . $p->__get("nombre") . "</td>";
        echo "<td>" . $p->__get("categoria") . "</td>";
        echo "<td>" . $p->__get("precio") . "</td>";
        echo "<td>" . $p->__get("stock") . "</td>";
        echo "<td>" . $p->__get("clasificacion") . "</td>";
        echo "</tr>";
        }        
        ?>






    </table>

    </article>
    
</body>
</html>