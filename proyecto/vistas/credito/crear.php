<div id="container">
    <figure class="fondo-credito">
        <img src="recursos/imagenes/fondoF.png" alt=credi style="max-width:100%;width:auto;height:600px">

    </figure>


    <table class="default">

        <tr>
            <td>
                <div class="name-titulo">
                    <b> &nbsp; Beneficios</b>
                </div>
                <hr style=" width:100%; color: black;">
                <div class="detalle">
                    <ul>
                        <li>Contar con crédito pre-aprobado para sus compras.</li>
                        <li>Comprar sin más solicitudes, trámites, ni papeles.</li>
                        <li>Usar tu credencial como dinero en efectivo.</li>
                        <li>Identificarse en cualquiera de nuestros almacenes y llevarse, sin entrada y sin garante, los artículos que desee.</li>
                        <li>Escoger su forma de pago: semanal, quincenal o mensualmente, hasta 24 meses plazo.</li>
                        <li>Atención 24/7 para solicitudes vía web.</li>
                        <li>Usted decide el día del mes que quiere abonar.</li>

                    </ul>
                </div>
            </td>

            <td>
                <br>

                <div class="name-titulo">

                    <b> &nbsp; Requisitos</b>
                </div>
                <hr style=" width:100%; color: black;">
                <div class="detalle">
                    <ul>
                        <li>Original y copia de cédula de identidad.</li>
                        <li>Planilla de servicios básicos.</li>
                        <li>Para obtener aumento de cupo, presentar soporte de ingresos: giros,<br> facturas o rol de pagos.</li>
                    </ul>
                    &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp; Para mayor información puede llamar sin costo a la línea <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: blue"> <b>1-800 ELECTROBLACK (524464)</b><br></span>
                    <br>
                    &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp; También contamos con números locales para las siguientes ciudades: <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <b>Guayaquil:</b> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <b>Quito:</b><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 04500-8500 &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 02500-8500<br>

                </div>
            </td>

        </tr>
    </table>


    <div id="contenedorForm">
        <div class="name-form">
            &nbsp;
            &nbsp;
            <b> &nbsp; Aplicar en línea</b>
        </div>
        <hr style=" width:96%; color: blue;">

        
        <div class="formularios">
            <form method="POST" action="" id="formulario" class="formulario" onsubmit="return validar();">

                <!--NOMBRE-->
                <div class="formulario-grupo " id="grupo-nombre">
                    <label class="formulario-label">Nombre*</label>
                    <div class="formulario-grupo-input">
                        <input required type="text" class="formulario-input" name="nombre" id="nombre">
                    </div>
                </div>

                <!--APELLIDO-->
                <div class="formulario-grupo" id="grupo-apellido">
                    <label class="formulario-label">Apellido*</label>
                    <div class="formulario-grupo-input">
                        <input required type="text" class="formulario-input" name="apellido" id="apellido">
                    </div>
                </div>

                <!--EMAIL-->
                <div class="formulario-grupo " id="grupo-email">
                    <label class="formulario-label">Email*</label>
                    <div class="formulario-grupo-input">
                        <input required type="email" class="formulario-input" name="email" id="email">
                    </div>
                </div>


                <!--CEDULA-->
                <div class="formulario-grupo " id="grupo-cedula">
                    <label class="formulario-label">Cédula*</label>
                    <div class="formulario-grupo-input">
                        <input required type="text" class="formulario-input" name="cedula" id="cedula">
                    </div>
                </div>


                <!--DIRECCION-->
                <div class="formulario-grupo " id="grupo-direccion">
                    <label class="formulario-label">Dirección*</label>
                    <div class="formulario-grupo-input">
                        <input required type="text" class="formulario-input" name="direccion" id="direccion">
                    </div>
                </div>

                <!--CELULAR-->
                <div class="formulario-grupo" id="grupo-celular">
                    <label class="formulario-label">Celular*</label>
                    <div class="formulario-grupo-input">
                        <input required type="text" class="formulario-input" name="celular" id="celular">
                    </div>
                </div>


                <!--ENVIAR-->
                <div class=" align-items-center justify-content-center">
                    <button type="submit" class="formulario-btn" id="formulario-btn">Enviar</button>
                </div>
            </form>


        </div>

    </div>
</div>