<?php

// Creacion de un modelo para 
class Producto extends Conectar{

    public function get_productos(){
        $conectar = parent::Conexion();
        parent::set_names();

        $sql = "SELECT * FROM tm_productos WHERE estado = 1";
        $sql = $conectar->prepare($sql);
        $sql->execute();

        return $resultado = $sql->fetchAll();

    } // fin de la funcion
    
    public function get_productos_id($prod_id){
        $conectar = parent::Conexion();
        parent::set_names();

        $sql = "SELECT * FROM tm_productos WHERE prod_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $prod_id);
        $sql->execute();

        return $resultado = $sql->fetchAll();
    } // fin de la funcion get_productos_id

    public function eliminar_producto($prod_id){
        $conectar = parent::Conexion();
        parent::set_names();

        $sql = "UPDATE tm_producto
                SET 
                estado = 0,
                fech_elim=now()
                WHERE
                prod_id = ?";

        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $prod_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function insertar_producto($prod_nom){
        $conectar = parent::Conexion();
        parent::set_names();

        $sql = "INSERT INTO tm_productos(prod_nom, fech_crea, estado) VALUES(?, now(), 1)";

        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $prod_nom);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function actualizar_producto($prod_id, $prod_nom){
        $conectar = parent::Conexion();
        parent::set_names();

        $sql = "UPDATE tm_productos
            SET 
            prod_nom=?,
            fech_modi=now()
            WHERE 
            prod_id = ?";

        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $prod_nom);
        $sql->bindValue(2, $prod_id);
        $sql->execute();
        return $respuesta = $sql->fetchAll();
    }

} // Fin de la clase Producto


?>