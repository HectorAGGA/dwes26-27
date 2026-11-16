<?php 

class Persona {

    private $DNI;
    private $nombre;
    private $email;

    public function __construct($DNI, $nombre, $email) {
        $this->DNI = $DNI;
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function __get($name) {
        switch ($name) {
            case 'DNI':
                return $this->DNI;
            case 'nombre':
                return $this->nombre;
            case 'email':
                return $this->email;
            default:
                return null;
        }
    }

    public function __set($name, $valor) {
        switch ($name) {
            case 'DNI':
                $this->DNI = $valor;
                break;
            case 'nombre':
                $this->nombre = $valor;
                break;
            case 'email':
                $this->email = $valor;
                break;
        }
    }

    public function to_String() {
        echo "DNI: {$this->DNI} - Nombre: {$this->nombre} - Email: {$this->email}";
    }
}

class Estudiante extends Persona {

    private $numExpediente;

    public function __construct($DNI, $nombre, $email, $numExpediente) {
        parent::__construct($DNI, $nombre, $email);   // ← ;
        $this->numExpediente = $numExpediente;
    }

    public function to_String() {
        parent::to_String();
        echo " - Nº Exp: {$this->numExpediente}";      // ← $this
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
</head>
<body>

<?php 
$persona = new Persona("111A", "hector", "hector@a.a");
$estudiante = new Estudiante("222A", "jose", "jose@a.a", "4545");

$persona->__set("nombre", "Alberto");

$persona->to_String();
echo "<br>";
$estudiante->to_String();
?>

</body>
</html>