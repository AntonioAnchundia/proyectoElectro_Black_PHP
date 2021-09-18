<?php
    include_once("modelos/credito.php");
    include_once("conexion.php");
    BD::crearInstancia(); 

    class ControladorCredito{
        public function lista(){
            include_once("vistas/admin/menu.php");
            $creditos= Credito::consultar();
            include_once("vistas/credito/lista.php");
        }

        public function crear(){
            if($_POST){
                $nombre=$_POST['nombre'];
                $apellido=$_POST['apellido'];
                $email=$_POST['email'];
                $cedula=$_POST['cedula'];
                $direccion=$_POST['direccion'];
                $celular=$_POST['celular'];

                Credito::crear($nombre, $apellido,$email, $cedula, $direccion,$celular);

                header("Location:?controlador=credito&accion=crear");
            }
            include_once("vistas/credito/crear.php");
        }

        public function borrar(){
            print_r($_GET);
            $id=$_GET['id'];
            Credito::borrar($id);
            header("Location:./?controlador=credito&accion=lista");
        }
    }
?>