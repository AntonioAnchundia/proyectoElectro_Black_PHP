<br>

<div class="row m-0  align-items-center justify-content-center">
    <div class="card center" style="width: 20rem;">

        <div class="card-header text-center">
            <b>Sign up</b>
        </div>
        <div class="card-body">
            <form action="" method="POST" >
                <div class="mb-3">
                    <label for="nombre"><b>Nombre:</b></label>
                    <input required type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="nombre"><b>Usuario:</b></label>
                    <input required type="text" class="form-control" id="user" name="user" placeholder="usuario" required>
                </div>
                <div class="mb-3">
                    <label for="email"><b>Correo Electronico:</b></label>
                    <input required type="email" class="form-control" id="correo" name="correo" placeholder="email" required>
                </div>
                <div class="mb-3">
                    <label for="contraseña"><b>Contraseña:</b></label>
                    <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="contraseña" required>
                </div>


                <div class=" text-center align-items-center justify-content-center">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <a class="btn btn-primary" href="?controlador=usuario&accion=inicio" role="button">Cancelar</a></div>
            </form>
        </div>
    </div>
</div>