<br>

<div class=" row m-0  align-items-center justify-content-center">
    <div class="card center" style="width: 90rem;">

        <div class="card-body">


            <div class="table-responsive mt-2">
                <table class="table table-striped">
                    <div class="card-header text-center">
                        <b>LISTA DE CLIENTES</b>
                    </div>
                    <thead class="table-dark table-border">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Contraseña</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($usuarios as $usuario) {

                        ?>

                            <tr>
                                <td style="width:200px"><?php echo $usuario->id; ?></td>
                                <td style="width:200px"><?php echo $usuario->nombre; ?></td>
                                <td style="width:200px"><?php echo $usuario->user; ?></td>
                                <td style="width:200px"><?php echo $usuario->correo; ?></td>
                                <td style="width:200px"><?php echo $usuario->contraseña; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>




        </div>
    </div>
</div>