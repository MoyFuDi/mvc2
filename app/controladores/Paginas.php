<?php
    class Paginas extends Controlador {
        public function __construct(){
            $this->articuloModelo = $this->modelo('Articulo');
            //echo 'Controlador paginas cargado';
        }

        public function index(){
            $articulos = $this->articuloModelo->obtenerArticulos();

            $datos = [
                'titulo' => 'Bienvenidos a MVC2',
                'articulos' => $articulos
            ];
            $this->vista('paginas/inicio', $datos);
        }

        public function articulo(){
            //$this->vista('paginas/articulo');
        }

        public function actualizar($num_registro){
            echo $num_registro;
        }
    }