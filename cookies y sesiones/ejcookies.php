<?php
if(isset($_COOKIE['nombre'])){
echo $_COOKIE['nombre'];
} else {
    setcookie('nombre','toreto',time() + 300);
}
?>