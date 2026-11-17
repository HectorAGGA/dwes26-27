<?php

class productos {


private $id;
private $nombre;
private $precio;
private $stock;
private $categoria;
private $clasificacion;

public function __construct($id,$nombre,$precio,$stock,$categoria){
$this->id = $id;
$this->nombre = $nombre;
$this->precio = $precio;
$this->stock = $stock;
$this->categoria = $categoria;
}

public function __get($valor){
    switch ($valor) {
        case 'id':
            return $this->id;
            break;
        case 'nombre':
            return $this->nombre;
            break;
        case 'precio':
            return $this->precio;
            break;
        case 'stock':
            return $this->stock;
            break;
        case 'categoria':
            return $this->categoria;
            break;
        case 'clasificacion':
            return $this->clasificacion;
            break;
        default:
            return null;
            break;
    }


}

public function clasificar(){
            if ($this->__get("stock")  == 0) {
                $this->clasificacion = "agotado";
            } else if($this->__get("stock")  <= 3){
                $this->clasificacion = "stock bajo";
            } else {
                $this->clasificacion = "disponible";
            }


} 

 


}