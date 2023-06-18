<?php

require_once 'conexion.php';

class ModeloCursos {

    public static function index($tabla) {

        $stmt = Conexion::connectar()->prepare("select * from $tabla");

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

        $stmt->close();

        $stmt=null;
    }
}
