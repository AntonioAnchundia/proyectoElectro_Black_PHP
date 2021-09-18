<?php

    class Credito{

        public $id;
        public $nombre;
        public $apellido;
        public $email;
        public $cedula;
        public $direccion;
        public $celular;


        public function __construct($id, $nombre, $apellido, $email, $cedula,$direccion, $celular){
            $this->id=$id;
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->email=$email;
            $this->cedula=$cedula;
            $this->direccion=$direccion;
            $this->celular=$celular;
        }

        public static function crear($nombre, $apellido,$email, $cedula, $direccion, $celular){
            $conexionBD= BD::crearInstancia();

            $sql=$conexionBD->prepare("INSERT INTO credito(nombre, apellido,email, cedula, direccion, celular) VALUES(?,?,?,?,?,?)");
            $sql->execute(array($nombre, $apellido,$email, $cedula, $direccion, $celular));
        }

        public static function consultar(){
            $listaCredito=[];
            $conexionBD=BD::crearInstancia();

            $sql=$conexionBD->query("SELECT * FROM credito");

            foreach($sql->fetchAll() as $credito){
                $listaCredito[] = new Credito($credito['id'],$credito['nombre'], $credito['apellido'], $credito['email'], $credito['cedula'], $credito['direccion'], $credito['celular']);
            }
            return $listaCredito;
        }

        public static function borrar($id){
            $conexionBD= BD::crearInstancia();

            $sql=$conexionBD->prepare("DELETE FROM credito WHERE id=?");
            $sql->execute(array($id));
        }

        public static function buscar($id){
            $conexionBD= BD::crearInstancia();

            $sql=$conexionBD->prepare("SELECT * FROM credito WHERE id=?");
            $sql->execute(array($id));
            $credito=$sql->fetch();
            return new Credito($credito['id'],$credito['nombre'],$credito['apellido'],$credito['email'],$credito['cedula'], $credito['direccion'], $credito['celular']);
        }
    }

?>