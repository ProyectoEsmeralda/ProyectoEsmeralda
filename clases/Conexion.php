<?php
    class Conexion {

        public $servidor = 'localhost';
        public $usuario = 'root';
        public $password = 'casapibe1';
        public $database = 'loginpoo2023';
        public $port = 3306; 
        public function conectar(){
            return mysqli_connect(
                $this->servidor,
                $this->usuario,
                $this->password,
                $this->database,
                $this->port
            );
        }
    }
?>