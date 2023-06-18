<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Authorization, Origin');
header('Access-Control-Allow-Methods:  POST, PUT, GET,DELETE');

require_once 'controladores/rutas.controlador.php';
require_once 'controladores/cursos.controlador.php';
require_once 'controladores/clientes.controlador.php';
require_once 'modelos/cursos.modelo.php';
require_once 'modelos/clientes.modelo.php';



$rutas = new RutasControlador();

$rutas->inicio();
?>