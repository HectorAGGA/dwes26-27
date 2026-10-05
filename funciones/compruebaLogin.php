<?php

$usuarios = [
    "pepe" => "1234",
    "juan" => "hola",
    "maria" => "5678"
];

$usuario = $_POST["usuario"];
$contra = $_POST["contra"];

if (isset($usuarios[$usuario])) {

    if ($usuarios[$usuario] == $contra) {

        include "ok.php";

    } else {

        $error = "contra";
        include "ko.php";
    }

} else {

    $error = "usuario";
    include "ko.php";
}

?>