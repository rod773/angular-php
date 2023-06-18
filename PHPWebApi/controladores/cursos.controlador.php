<?php

class ControladorCursos {

    public function index() {
        
        $cursos = ModeloCursos::index("cursos");
        
        $json = array(
            "detalle" => $cursos,
        );

        echo json_encode($json, true);

        return;
    }
    
    public function create() {
        $json = array(
            "detalle" => "estas en la vista create cursos"
        );

        echo json_encode($json, true);

        return;
    }
    
    public function show($id) {
        $json = array(
            "detalle" => "este es el curso con el id = $id"
        );

        echo json_encode($json, true);

        return;
    }
    
    public function update($id) {
        $json = array(
            "detalle" => "el curso $id fue actualizado"
        );

        echo json_encode($json, true);

        return;
    }
    
    public function delete($id) {
        $json = array(
            "detalle" => "el curso $id fue borrado"
        );

        echo json_encode($json, true);

        return;
    }
}
