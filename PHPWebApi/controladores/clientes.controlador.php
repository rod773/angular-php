<?php

class ControladorClientes {

    public function create($datos) {


         
        
        //print_r(array_filter($datos));
       

        echo json_encode($datos, true);

        return;
    }
}
