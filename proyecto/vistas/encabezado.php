<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/css/estilos.css">
    <!-- <link rel="stylesheet" href="motos.html"> -->
    <script src="https://kit.fontawesome.com/c6397fc2d3.js" crossorigin="anonymous"></script>
    <script src="recursos/js/validar.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ElectroBlack</title>
</head>
<body>
    <!-- inicio sesión / registro-->
    <header>
        <div id="contenedor">
                <!-- LOG IN -->
            <div id="login">
            <a href="?controlador=login&accion=login">Iniciar Sesión</a>
                <a href="?controlador=usuario&accion=crear">Registrase</a>
            </div>
                <!-- iconos -->
            <div class="iconos">
                <ul>
                    <li><img src="recursos/iconos/twitter.png" alt="twitter"></li>
                    <li><img src="recursos/iconos/instagram.png" alt="instagram"></li>
                    <li><img src="recursos/iconos/facebook.png" alt="facebook"></li>
                </ul>
            </div>
        </div>

        <nav>
                <!-- MENU -->
            <div id="menu">
                <ul>
                    <li><a href="?controlador=paginas&accion=empresa">EMPRESA</a></li>
                    <li><a href="?controlador=producto&accion=lista">COMPRAS EN LÍNEA</a></li>
                    <li> <a href="?controlador=credito&accion=crear"> CREDITO INMEDITADO</a></li>
                    <li><a href="?controlador=paginas&accion=blog">BLOG</a></li>
                    <li><a href="?controlador=paginas&accion=contacto">CONTACTO</a></li>  
                    <li><a href="?controlador=paginas&accion=comerciales">NUESTROS COMERCIALES</a></li>  
                </ul>

                <div id="logo">
                    <img src="recursos/imagenes/logo.jpeg" alt="">
                </div>
            </div>
                <!-- linea de header  -->
            <div id="recuadro1"></div>
        </nav>
    </header>
