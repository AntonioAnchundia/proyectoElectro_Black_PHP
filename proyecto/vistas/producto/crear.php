<br>

<div class=" row m-0  align-items-center justify-content-center" >
    <div class="card center" style="width: 50rem;">
    
        <div class="card-header text-center">
            <b>Ingresar Productos</b>
        </div>
        <div class="card-body">
            <form action="productoCrear.php" method="POST" enctype="multipart/form-data">

            <div class="form-group col-sm-12">
                    <label for="marca">Marca:</label>
                    <input type="text" class="form-control" placeholder="marca" name="marca" aria-label="Marca">
                </div>
                <br>
                <div class="form-group col-sm-12">
                    <label for="modelo">Modelo:</label>
                    <input type="text" class="form-control" placeholder="modelo" aria-label="Modelo" name="modelo">
                </div>
                <br>
    
                <div class="form-group col-sm-12">
                    <label for="urlm">Url:</label>
                    <input type="url" class="form-control" placeholder="url" id="basic-url" aria-describedby="basic-addon3" name="compra">
                </div>          
                <br>
                <div class="form-group col-sm-12">
                    <label for="precio">Precio:</label>
                    <input type="text" class="form-control" placeholder="$" name="precio" aria-label="Dollar amount (with dot and two decimal places)">   
                </div>
                <br>
                <div class="form-group col-sm-12">
                    <label for="img">Imagen:</label>
                    <input type="file" name="imgProducto" placeholder="imagen" accept=".jpg , .png , .gif">
                </div>

                <div class=" text-center align-items-center justify-content-center">  
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div> 
</div>