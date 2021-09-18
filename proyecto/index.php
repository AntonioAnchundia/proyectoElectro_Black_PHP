<?php

    $controlador="paginas";
    $accion="inicio";
    if ( isset($_GET['controlador']) && isset($_GET['accion']) ){
        if( ($_GET['controlador']!="") && ($_GET['accion']!="") ){
            $controlador=$_GET['controlador'];
            $accion=$_GET['accion'];
            require("vistas/template.php");
        }
//         if( ($_GET['controlador']=="menu") && ($_GET['accion']!="menu") ){
//             $controlador=$_GET['controlador'];
//             $accion=$_GET['accion'];
//             require("vistas/prueba.php");
//     }
//     if( ($_GET['controlador']=="credito") && ($_GET['accion']!="lista") ){
//         $controlador=$_GET['controlador'];
//         $accion=$_GET['accion'];
//         require("vistas/prueba.php");
// }
}
?>