<main>
    <section id="articulosprincipales">
        <article id="compra">
            <h2>PRODUCTOS</h2>
            <div id="recuadro3"></div>
        </article>

        <article id="productos">

            <div id="slider">
                <div id="pcompra" class="compra">

                    <?php foreach ($productos as $producto) { ?>

                        <div class="recuadro  ">
                            <br>
                            <img src="data:image/jpg;base64,<?php echo base64_encode($producto->imgProducto) ?>" alt="">
                            <div class="infoProducto">
                                <br><br><?php echo $producto->marca; ?>
                                <br><?php echo $producto->modelo; ?>
                                <br>
                                <div class="precio">
                                    <span><?php echo $producto->precio; ?></span>
                                </div>
                                <br><br>
                                <a class="btn btn-primary" href="<?php echo $producto->compra; ?>" target="__blank" role="button">Compra</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>


            </div>
        </article>
    </section>
</main>