<?php
    include_once("controladores/controlador_".$controlador.".php");
    $objControlador="Controlador".ucfirst($controlador);  //se obtiene el nombre de la clase que se va instanciar
    $controlador=new $objControlador();
    $controlador->$accion();
?>