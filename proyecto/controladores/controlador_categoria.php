<?php
    include_once("modelos/categoria.php");
    include_once("conexion.php");
    BD::crearInstancia(); //instancia e ingresar al metodo

    class ControladorCategoria{
        public function lista(){
            $categorias= Categoria::consultar();
            include_once("vistas/categorias/lista.php");
        }
    }

?>