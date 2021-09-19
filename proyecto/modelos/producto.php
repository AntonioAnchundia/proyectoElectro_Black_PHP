<?php
    class Producto{

        public $id_producto;
        public $imgProducto;
        public $modelo;
        public $marca;
        public $precio;
        public $compra;
        

        public function __construct($id_producto, $imgProducto, $marca, $modelo, $precio, $compra) {
            $this->id_producto=$id_producto;
            $this->imgProducto=$imgProducto;
            $this->modelo=$modelo;
            $this->marca=$marca;
            $this->precio=$precio;
            $this->compra=$compra;
        }

        public static function consultar(){
            $listaProductos=[];
            $conexionBD=BD::crearInstancia();

            $sql=$conexionBD->query("SELECT * FROM produc");

            foreach($sql->fetchAll() as $producto){
                $listaProductos[] = new Producto($producto['id_producto'],$producto['imgProducto'],$producto['marca'],$producto['modelo'], $producto['precio'], $producto['compra']);
            }
            return $listaProductos;
        }

    }
?>