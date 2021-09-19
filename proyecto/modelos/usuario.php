<?php

    class Usuario{

        public $id;
        public $nombre;
        public $correo;
        public $contraseña;
        public $user;

        public function __construct($id, $nombre, $correo, $contraseña, $user){
            $this->id=$id;
            $this->nombre=$nombre;
            $this->correo=$correo;
            $this->contraseña=$contraseña;
            $this->user=$user;
        }

        public static function consultar(){
            $listaUsuarios=[];
            $conexionBD=BD::crearInstancia();

            $sql=$conexionBD->query("SELECT * FROM usuarios");


            foreach($sql->fetchAll() as $usuario){
                $listaUsuarios[] = new Usuario($usuario['id'], $usuario['nombre'], $usuario['correo'], $usuario['contraseña'], $usuario['user'] );
            }

            return $listaUsuarios;
        }


        public static function crear($nombre, $correo, $contraseña, $user){
            $conexionBD= BD::crearInstancia();

            $sql=$conexionBD->prepare("INSERT INTO usuarios(nombre, correo, contraseña, user) VALUES(?,?,?,?)");
            $sql->execute(array($nombre,$correo,$contraseña, $user));
        }

        public static function borrar($id){
            $conexionBD= BD::crearInstancia();

            $sql=$conexionBD->prepare("DELETE FROM usuarios WHERE id=?");
            $sql->execute(array($id));
        }

        public static function buscar($id){
            $conexionBD= BD::crearInstancia();

            $sql=$conexionBD->prepare("SELECT * FROM usuarios WHERE id=?");
            $sql->execute(array($id));
            $usuario=$sql->fetch();
            return new Usuario($usuario['id'],$usuario['nombre'],$usuario['user'],$usuario['correo'],$usuario['contraseña']);
        }

        public static function editar($id, $nombre,$user, $correo, $contraseña ){
            $conexionBD= BD::crearInstancia();
            $sql=$conexionBD->prepare("UPDATE usuarios SET nombre=?,user=?, correo=?, contraseña=? WHERE id=? ");
            $sql->execute(array($nombre,$user, $correo,$contraseña,  $id));
        }
    }
