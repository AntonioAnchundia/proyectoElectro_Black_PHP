<?php

    include_once("conexion.php");

    $imgProducto=addslashes(file_get_contents($_FILES['imgProducto']['tmp_name']));
            $marca=$_POST['marca'];
            $modelo=$_POST['modelo'];
            $precio=$_POST['precio'];
            $compra=$_POST['compra'];
    $query = "INSERT INTO produc(imgProducto, marca, modelo, precio, compra) VALUES('$imgProducto', '$marca', '$modelo', '$precio', '$compra')";

    $conexionBD= BD::crearInstancia();

    $resultado = $conexionBD->query($query);
    if($resultado){
        echo "SE INSERTOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO";
    }else{
        echo "Error: No se puedo insertar!";
    }
    ?>
