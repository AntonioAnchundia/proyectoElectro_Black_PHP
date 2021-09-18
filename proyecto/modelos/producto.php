<?php
    class Producto{
        public $id_producto;
        public $imgProducto;
        public $marca;
        public $modelo;
        public $precio;
        public $compra;

        public function __construct($imgProducto, $marca, $modelo, $precio, $compra) {
            // $this->id_producto=$id_producto;
            $this->imgProducto=$imgProducto;
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->precio=$precio;
            $this->compra=$compra;
        }

        public static function consultar(){
            $listaProductos=[];
            $conexionBD=BD::crearInstancia();

            $sql=$conexionBD->query("SELECT * FROM produc");

            foreach($sql->fetchAll() as $producto){
                $listaProductos[] = new Producto($producto['imgProducto'],$producto['marca'],$producto['modelo'], $producto['precio'], $producto['compra']);
            }
            return $listaProductos;
        }

        public static function crear($imgProducto, $marca, $modelo, $precio, $compra){
            $conexionBD= BD::crearInstancia();
            $sql=$conexionBD->prepare("INSERT INTO produc(imgProducto, marca, modelo, precio, compra) VALUES(?,?,?,?,?)");
            $sql->execute(array($imgProducto, $marca, $modelo, $precio, $compra));
        
        }

        public static function borrar($id_producto){
            $conexionBD= BD::crearInstancia();

            $sql=$conexionBD->prepare("DELETE FROM produc WHERE id_producto=?");
            $sql->execute(array($id_producto));
        }

        public static function editar($id_producto, $imgProducto, $marca, $modelo, $precio){
            $conexionBD= BD::crearInstancia();
            $sql=$conexionBD->prepare("UPDATE produc SET imgProducto=?,marca=?, modelo=?, precio=? WHERE id_producto=? ");
            $sql->execute(array($imgProducto, $marca, $modelo, $precio, $id_producto));
        }

    }
?>