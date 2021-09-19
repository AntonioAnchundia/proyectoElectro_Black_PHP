<?php
    class ControladorLogin{
        public function login(){
            include_once("vistas/login/login.php");
        }


        public function loginValidar(){
            // include_once("vistas/login/loginValidacion.php");
            if($_POST){
                print_r($_POST);
                $usu  = $_POST["txtusuario"];
                $pass   = $_POST["txtpassword"];
                $rol  = $_POST["rol"];
                Usuario::crear($usu, $pass, $rol);
            }
        }
        public function pag_admin(){
            include_once("vistas/login/pag_admin.php");
        }
        public function pag_user(){
            include_once("vistas/login/pag_user.php");
        }
        





    }
?>