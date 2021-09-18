<div class="columna1">
    <div class="contenedorCeleste">
        <div class="tituloVineta2">
            <h2>CONTACTO</h2>
        </div>
        <div class="cuadroAzul">

            <div class="columna1">
                <div class="tituloVineta">
                    <h3 id="callCenter">Contacto por Teléfono</h3>
                </div>
                <ul>
                    <li class="callCenter">
                        <h4>Call Center: 0997804554</h4>
                    </li>

                    <p>También contamos con números locales para las siguientes ciudades:</p>
                    <li class="callCenter">
                        <h4>Guayaquil:</h4>
                        <p>04 500-4700</p>
                    </li>
                    <li class="callCenter2">
                        <h4>Quito:</h4>
                        <p>02 500-4700</p>
                    </li>
                </ul>

                <div class="tituloVineta">
                    <h3 id="oficinas">Oficinas</h3>
                </div>
                <p style="margin-left:40px;">Nuestra oficina matriz está ubicada en Guayaquil, Ecuador. También contamos con oficinas regionales en Quito.</p>
                <ul>
                    <li class="callCenter">
                        <h4>Guayaquil:</h4>
                        <p>04 500-4700<br>
                            PBX: 04 2-593-100 ext. 4004 o 4007</p>
                        <p class="direccion">Dirección: Cdla. Kennedy Norte, Calle José Castillo y Miguel Ángel Granados.</p>


                    </li>
                    <li class="callCenter2">
                        <h4>Quito:</h4>
                        <p>02 500-4700<br>
                            PBX: 02 396-4300</p>
                        <p class="direccion">Dirección: Av. Naciones Unidas E9-112 y Av. República del Salvador.</p>
                    </li>
                </ul>

                <div class="tituloVineta2">
                    <h3 id="servicioCliente">Servicio al Cliente y Departamento Legal</h3>
                </div>
                <h4 style="margin-left:40px;">Guayaquil:</h4>
                <p class="direccion" style="margin-left:40px;">Cdla. Kennedy Norte, Calle José Castillo y Miguel Ángel Granados, Matriz.</p>

            </div>



                <div class="tituloVineta">
                    <h3 id="contactoMail">Contacto por Mail</h3>
                </div>
                <div class="formulario">
                    <form id="formularioContacto">
                        <div class="contactoForm"><label>Tema</label><br>
                            <select id="tema" name="tema" onchange="cambiarSector();">
                                <option value="" title="">Seleccione un tema</option>
                                <option value="Ventas a Domicilio" title="Ventas">Ventas a Domicilio</option>
                                <option value="Solicita tu Credencial" title="Call Center Crédito Colocación">Solicita tu Credencial</option>
                                <option value="Ventas telefónicas" title="Ventas">Ventas telefónicas</option>
                                <option value="Inf. de Garantia Extendida" title="Garantia Extendida">Inf. de Garantia Extendida</option>
                                <option value="Inf. de Ganga Asegurada" title="Garantia Extendida">Inf. de Ganga Asegurada</option>
                                <option value="Servicio técnico" title="Servicio al Cliente">Servicio técnico</option>
                                <option value="Requerir Cobros a Domicilio" title="Cobranzas">Requerir Cobros a Domicilio</option>
                                <option value="Reclamos y Quejas" title="Servicio al Cliente">Reclamos y Quejas</option>
                                <option value="Informacion de Linea de Crédito" title="Crédito ">Informacion de Linea de Crédito</option>
                            </select>
                        </div>

                        <div class="contactoForm"><label>Sector</label><br>
                            <input id="sectorInput" type="text" value="" disabled="true">
                        </div>

                        <div class="contactoForm"><label>Nombre completo*</label><br>
                            <input id="nombre" name="nombre">
                        </div>

                        <div class="contactoForm"><label>E-mail</label><br>
                            <input id="mail" name="mail">
                        </div>


                        <div class="contactoForm"><label>Provincia*</label><br>
                            <select id="provinciaContacto" name="provincia" onchange="cargarLocalidadesContacto();">
                                <option value="">Seleccione una provincia</option>
                                <option value="Azuay">Azuay</option>
                                <option value="Bolívar">Bolívar</option>
                                <option value="Cañar">Cañar</option>
                                <option value="Carchi">Carchi</option>
                                <option value="Chimborazo">Chimborazo</option>
                                <option value="Cotopaxi">Cotopaxi</option>
                                <option value="El Oro">El Oro</option>
                                <option value="Esmeraldas">Esmeraldas</option>
                                <option value="Galápagos">Galápagos</option>
                                <option value="Guayas">Guayas</option>
                                <option value="Imbabura">Imbabura</option>
                                <option value="Loja">Loja</option>
                                <option value="Los Ríos">Los Ríos</option>
                                <option value="Manabí">Manabí</option>
                                <option value="Morona Santiago">Morona Santiago</option>
                                <option value="Napo">Napo</option>
                                <option value="Orellana">Orellana</option>
                                <option value="Pastaza">Pastaza</option>
                                <option value="Pichincha">Pichincha</option>
                                <option value="Santa Elena">Santa Elena</option>
                                <option value="Santo Domingo de los Tsáchilas">Santo Domingo de los Tsáchilas</option>
                                <option value="Sucumbíos">Sucumbíos</option>
                                <option value="Tungurahua">Tungurahua</option>
                                <option value="Zamora Chinchipe">Zamora Chinchipe</option>
                            </select>
                        </div>


                        <div class="contactoForm"><label>Localidad*</label><br>
                            <select id="localidadConacto" name="localidad">
                                <option value="">Seleccione una localidad</option>
                                <option value="Guayaquil">Guayaquil</option>
                                <option value=" Quito "> Quito </option>
                                <option value=" Cuenca "> Cuenca </option>
                                <option value=" Santo Domingo "> Santo Domingo </option>
                                <option value="CHIMBORAZO">CHIMBORAZO</option>
                                <option value="COTOPAXI ">COTOPAXI </option>
                                <option value="EL ORO">EL ORO</option>
                                <option value="ESMERALDAS ">ESMERALDAS </option>
                                <option value="GUAYAS ">GUAYAS </option>
                                <option value="IMBABURA ">IMBABURA </option>
                                <option value="LOJA ">LOJA </option>
                                <option value="LOS RIOS ">LOS RIOS </option>
                                <option value="MANABI ">MANABI </option>
                                <option value="MORONA SANTIAGO">MORONA SANTIAGO</option>
                                <option value="NAPO ">NAPO </option>
                                <option value="ORELLANA ">ORELLANA </option>
                                <option value="PASTAZA">PASTAZA</option>
                                <option value="PICHINCHA">PICHINCHA</option>
                                <option value="SANTA ELENA">SANTA ELENA</option>
                                <option value="SANTO DOMINGO ">SANTO DOMINGO </option>
                                <option value="Machala ">Machala </option>
                                <option value="Manta ">Manta </option>
                            </select><br>

                            </select>
                        </div>

                        <div class="contactoForm"><label>Teléfono particular</label><br>
                            <input id="telefonoparticular" name="telefonoparticular">
                        </div>

                        <div class="contactoForm"><label>Teléfono trabajo</label><br>
                            <input id="telefonotrabajo" name="telefonotrabajo">
                        </div>

                        <div class="contactoForm"><label>Teléfono celular</label><br>
                            <input id="telefonocelular" name="telefonocelular">
                        </div>

                        <div class="contactoForm"><label>Asunto*</label><br>
                            <input id="mail" name="asunto">
                        </div>

                        <div><label>Mensaje*</label><br>
                            <textarea id="mensaje" name="mensaje"></textarea>
                        </div>

                        <input type="reset" value="Enviar" />

                    </form>

                    <div class="cargador"></div>
                </div>
            </div>
        </div>
    </div>
</div>