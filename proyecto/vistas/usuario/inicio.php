<!-- <a name="" id="" class="btn btn-success" href="?controlador=usuario&accion=crear" role="button">Registrar Usuario</a> -->

<div class="table-responsive mt-2" >
        <table class="table table-striped table-bordered "  >
            <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($usuarios as $usuario){

    ?>

        <tr>
            <td><?php echo $usuario->id; ?></td>
            <td><?php echo $usuario->nombre; ?></td>
            <td><?php echo $usuario->user; ?></td>
            <td><?php echo $usuario->correo; ?></td>
            <td><?php echo $usuario->contraseña; ?></td>
            
            <td>
                <a href="?controlador=usuario&accion=editar&id=<?php echo $usuario->id; ?>">Editar</a>
                <a href="?controlador=usuario&accion=borrar&id=<?php echo $usuario->id; ?>">Borrar</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>
