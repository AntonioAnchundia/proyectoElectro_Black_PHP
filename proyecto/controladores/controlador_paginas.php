<?php
    class ControladorPaginas{
        public function inicio(){
            include_once("vistas/paginas/inicio.php");
        }

        // public function credito(){
        //     include_once("vistas/paginas/credito.php");
        // }

        public function empresa(){
            include_once("vistas/paginas/empresa.php");
        }

        public function blog(){
            include_once("vistas/paginas/blog.php");
        }
        
        public function contacto(){
            include_once("vistas/paginas/contacto.php");
        }

        public function comerciales(){
            include_once("vistas/paginas/comerciales.php");
        }
    }
?>