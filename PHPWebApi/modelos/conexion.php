<?php


class Conexion{
    
    public static function connectar(){
       $link = new PDO("mysql:host=localhost;dbname=apirest", 'root', '');
    
       $link ->exec("set names utf8");
       
       return $link;
       
    }
}
