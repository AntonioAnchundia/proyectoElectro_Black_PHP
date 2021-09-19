<?php
    include_once("modelos/producto.php");
    include_once("conexion.php");
    BD::crearInstancia();

    class ControladorProducto{
        public function lista(){
            $productos=Producto::consultar();

            include_once("vistas/producto/lista.php");
        }

        public function crear(){
            include_once("vistas/admin/menu.php");

            include_once("vistas/producto/crear.php");
        }
    
    }
?>