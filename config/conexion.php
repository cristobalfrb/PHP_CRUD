<?php

// Creacion de una clase para conexion
class Conectar{
    protected $dbh; // Variable protegida para bd host

    protected function Conexion(){
        try{
            $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=crud_productos", "root", "");
            return $conectar;
        }catch(Exception $e){
            print "¡Error BD: " . $e->getMessage() . "<br/>"; // Mensaje de error en caso de falla
            die();
        } // fin del try catch

    } // fin de la funcion conexion

    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }

} // Fin de la clase conectar


?>