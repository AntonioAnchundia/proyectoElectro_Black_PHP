<br>

<div class=" row m-0  align-items-center justify-content-center">
    <div class="card center" style="width: 90rem;">

        <div class="card-body">


            <div class="table-responsive mt-2">
                <table class="table table-striped">
                    <div class="card-header text-center">
                        <b>LISTA DE CLIENTES CON CRÉDITO INMEDIATO</b>
                    </div>
                    <thead class="table-dark table-border">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Cedula</th>
                            <th>Direccion</th>
                            <th>Celular</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($creditos as $credito) {
                        ?>

                            <tr>
                                <td style="width:5%"><?php echo $credito->id; ?></td>
                                <td style="width:12%"><?php echo $credito->nombre; ?></td>
                                <td style="width:12%"><?php echo $credito->apellido; ?></td>
                                <td style="width:22%"><?php echo $credito->email; ?></td>
                                <td style="width:12%"><?php echo $credito->cedula; ?></td>
                                <td style="width:22%"><?php echo $credito->direccion; ?></td>
                                <td style="width:15%"><?php echo $credito->celular; ?></td>
                                <td style="width:20%">
                                    <a style="width:12%" href="?controlador=credito&accion=borrar&id=<?php echo $credito->id; ?>">Borrar</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>




        </div>
    </div>
</div>