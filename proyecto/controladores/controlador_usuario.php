<?php
    include_once("modelos/usuario.php");
    include_once("conexion.php");
    BD::crearInstancia(); 

    class ControladorUsuario{
        public function inicio(){
            $usuarios=Usuario::consultar();

            include_once("vistas/usuario/inicio.php");
        }

        public function lista(){
            include_once("vistas/admin/menu.php");

            $usuarios=Usuario::consultar();

            include_once("vistas/usuario/lista.php");
        }

        public function crear(){
            if($_POST){
                $nombre=$_POST['nombre'];
                
                $correo=$_POST['correo'];
                $contraseña=$_POST['contraseña'];
                $user=$_POST['user'];

                Usuario::crear($nombre,$correo,$contraseña,$user);

                header("Location:?controlador=login&accion=login");

            }
            include_once("vistas/usuario/crear.php");

        }

        public function editar(){
            

            if($_POST){
                $id=$_POST['id'];
                $nombre=$_POST['nombre'];
                $user=$_POST['user'];
                $correo=$_POST['correo'];
                $contraseña=$_POST['contraseña'];
                $privilegio=$_POST['id_privilegio'];
                $fecha_registro=$_POST['fecha_registro'];

                Usuario::editar($id, $nombre,$user, $correo, $contraseña,$privilegio,$fecha_registro);

                header("Location:./?controlador=usuario&accion=inicio");

            }

            $id=$_GET['id'];
            $usuario=(Usuario::buscar($id));

            include_once("vistas/usuario/editar.php");
        }

        public function borrar(){
            print_r($_GET);
            $id=$_GET['id'];
            Usuario::borrar($id);
            header("Location:./?controlador=usuario&accion=inicio");
        }
    }
?>