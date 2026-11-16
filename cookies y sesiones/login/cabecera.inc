<?php
session_start();
if(isset($_SESSION['loginusu'])){

    echo "<a href='index.php'> Ir a Index</a> <a href='pag1.php'> Ir a pag1</a> <a href='pag2.php'> Ir a pag2</a>";
 }else {
    header("Location:login.php");
 }