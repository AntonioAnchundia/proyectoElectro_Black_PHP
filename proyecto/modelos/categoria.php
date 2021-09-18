<?php
    class Categoria{
        public $nombre;

        public function __construct($nombre){
            $this->nombre=$nombre;
        }

        public static function consultar(){
            $listaCategorias=[];
            $conexionBD=BD::crearInstancia();

            $sql=$conexionBD->query("SELECT * FROM categoria");

            foreach($sql->fetchAll() as $categoria){
                $listaCategorias[] = new Categoria($categoria['nombre']);
            }

            return $listaCategorias;
        }

        public static function lista(){
            $listaProductos=[];
            $conexionBD=BD::crearInstancia();

            $sql=$conexionBD->query("SELECT * FROM produc");


            foreach($sql->fetchAll() as $producto){
                $listaProductos[] = new Producto($producto['imgProducto'],$producto['marca'],$producto['modelo'], $producto['precio']);
            }

            return $listaProductos;
        }
    }

?>