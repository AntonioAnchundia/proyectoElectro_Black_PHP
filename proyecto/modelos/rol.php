<?php
    class Rol{
        public $rol_nombre;

        public function __construct($rol_nombre){
            $this->rol_nombre=$rol_nombre;
        }

        public static function consultar(){
            $listaPrivilegio=[];
            $conexionBD=BD::crearInstancia();

            $sql=$conexionBD->query("SELECT * FROM roles");

            foreach($sql->fetchAll() as $rol){
                $listaRol[] = new Categoria($privilegio['rol_nombre']);
            }

            return $listaRol;
        }
    }

?>