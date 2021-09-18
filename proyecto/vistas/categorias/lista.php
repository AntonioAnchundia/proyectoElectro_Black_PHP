<main>
    <!-- ASIDE DE BUSCAR -->
    <aside>
        <div id="buscar">
            <h1>Buscar</h1>
            <form name="busqueda" method="GET">
                <label>
                    <input type="search" name="buscar" placeholder="BuscarProducto">
                    <img src="recursos/iconos/lupa.png" alt="Buscar">
                </label>
            </form>
        </div>

        <!-- ASIDE DE CATALOGO -->
        <div id="categoria">
            <h1>Categorías</h1>
            <div id="recuadro2"></div>
            <ul id=prueba>
                <?php foreach($categorias as $categoria) { ?>
                        <li><a href="?controlador=categoria&accion=$categoria->nombre"><?php echo $categoria->nombre ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </aside>

    <section id="articulosprincipales">
        <article id="compra">
            <h2>PRODUCTOS</h2>
            <div id="recuadro3"></div>
        </article>