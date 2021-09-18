<?php
    include_once("modelos/producto.php");
    include_once("conexion.php");
    BD::crearInstancia();

    class ControladorProducto{
        public function lista(){
            $productos= Producto::consultar();
            include_once("vistas/producto/lista.php");
        }
        // public function crear(){
        //     if($_POST){
        //         $imgProducto=addslashes(file_get_contents($_FILES['imgProducto']['tmp_name']));
        //         $marca=$_POST['marca'];
        //         $modelo=$_POST['modelo'];
        //         $precio=$_POST['precio'];
        //         $compra=$_POST['compra'];
        //         Producto::crear($imgProducto,$marca,$modelo,$precio, $compra); 
                
        //     }
        //     include_once("vistas/producto/crear.php");
        // }

        public function crear(){
            include_once("vistas/producto/crear.php");
        }

        public function editar(){
            if($_POST){
                $id_producto=$_POST['id_producto'];
                $imgProducto=$_POST['imgProducto'];
                $marca=$_POST['marca'];
                $modelo=$_POST['modelo'];
                $precio=$_POST['precio'];

                Usuario::editar($id_producto, $imgProducto, $marca, $modelo, $precio);


               // header("Location:./?controlador=usuario&accion=inicio");

            }

            $id_producto=$_GET['id_producto'];
            $producto=(Usuario::buscar($id_producto));

            include_once("vistas/producto/editar.php");
        }

        public function borrar(){
            print_r($_GET);
            $id_producto=$_GET['id_producto'];
            Producto::borrar($id_producto);
            header("Location:./?controlador=producto&accion=lista");
        }

    }
?>