<?php
    class ControladorMenu{
        public function menu(){
            include_once("vistas/admin/menu.php");
        }
        
        public function credito(){
            include_once("vistas/credito/lista.php");
        }

        public function clientes(){
            include_once("vistas/usuario/lista.php");
        }
    }
?>