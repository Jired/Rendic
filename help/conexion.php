<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class conexion {
    private $servidor;
    private $bd;
    private $usuario;
    private $pass;
    public $enlace;

    public function __construct() {
        $this->servidor = "localhost"; 
        $this->bd = "rendic"; 
        $this->usuario = "root"; 
        $this->pass = ""; 
        $this->conectar();
    }

   /* public function __destruct() {
        if ($this->enlace && $this->enlace instanceof mysqli) {
            mysqli_close($this->enlace);
        }
    }
        */

    public function conectar() {
        $this->enlace = mysqli_connect($this->servidor, $this->usuario, $this->pass, $this->bd);

        if (!$this->enlace) {
            die('Conexión fallida: ' . mysqli_connect_error());
        }
    }
}
?>