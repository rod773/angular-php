<?php

$arrayRutas = explode("/", $_SERVER['REQUEST_URI']);
/*
  echo "<pre>";
  print_r(array_filter($arrayRutas));
  echo "<pre>";
*/

if (count(array_filter($arrayRutas)) == 1) {

    $json = array(
        "detalle" => "no encontrado"
    );

    echo json_encode($json, true);

    return;
} else {
    if (count(array_filter($arrayRutas)) == 2 && array_filter($arrayRutas)[1]=='api') {
        if (array_filter($arrayRutas)[2] == "cursos") {
            if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

                $cursos = new ControladorCursos();

                $cursos->create();
            } else if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'GET') {

                $cursos = new ControladorCursos();

                $cursos->index();
            }
        }

        if (array_filter($arrayRutas)[2] == "registro") {


            if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

                $datos = array(
                    "nombre"=> $_POST['nombre'],
                    "apellido"=> $_POST['apellido'],
                    "email"=> $_POST['email'],
                    );
                /*
                echo "<pre>";
                print_r(array_filter($datos));
                echo "<pre>";
                */
                
                $clientes = new ControladorClientes();

                $clientes->create($datos);
                
            }

        }
    } else {
        if (array_filter($arrayRutas)[2] == "cursos" && is_numeric(array_filter($arrayRutas)[3]) == "cursos") {
            if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'GET') {

                $cursos = new ControladorCursos();

                $cursos->show(array_filter($arrayRutas)[3]);
            }

            if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'PUT') {

                $cursos = new ControladorCursos();

                $cursos->update(array_filter($arrayRutas)[3]);
            }

            if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'DELETE') {

                $cursos = new ControladorCursos();

                $cursos->delete(array_filter($arrayRutas)[3]);
            }
        }
    }
}
?>