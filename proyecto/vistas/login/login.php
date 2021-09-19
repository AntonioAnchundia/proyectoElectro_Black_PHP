<br>

<div class=" row m-0  align-items-center justify-content-center">
    <div class="card center" style="width: 18rem;">
    
        <div class="card-header text-center">
            <b>Iniciar Sesión</b>
        </div>
        <div class="card-body">
            <form  action="index.php?controlador=producto&accion=lista" method="POST" id="formlg" role="form" >
                <div class="mb-3">
                    <label for="nombre" class="form-label"><b>Usuario:</b></label>
                    <input type="text" class="form-control" name="user" id="user" aria-describedby="helpId" placeholder="usuario" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label"><b>Password:</b></label>
                    <input type="password" class="form-control" name="contraseña" id="contraseña" aria-describedby="emailHelpId" placeholder="password" required>
                </div>

            <div class=" text-center align-items-center justify-content-center">   
                <input name="" id="" class="btn btn-success" type="submit" value="Iniciar Sesión"> 
            </div>

            <div class=" text-center align-items-center justify-content-center">
                <a class="btn btn-primary" href="?controlador=menu&accion=menu" role="button">Admin</a></div>

            </form>
        </div>
    </div> 
</div>