<?php
include_once("conexion.php");

$imgProducto = addslashes(file_get_contents($_FILES['imgProducto']['tmp_name']));
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$precio = $_POST['precio'];
$compra = $_POST['compra'];
$query = "INSERT INTO produc(imgProducto, marca, modelo, precio, compra) VALUES('$imgProducto', '$marca', '$modelo', '$precio', '$compra')";

$conexionBD = BD::crearInstancia();

$resultado = $conexionBD->query($query);
if ($resultado) { ?>

<center>
<H1>SE INSERTO CORRECTAMENTE</H1>
<H2>POR FAVOR RETROCEDA A LA PAGINA ANTERIOR</H2>
<img src="recursos/imagenes/GIFF.gif" alt="GIF" height="300px">
</center>

<?php    } else {
    echo "Error: No se puedo insertar!";
}?>
    