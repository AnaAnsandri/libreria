<html>
    <head>
        <link rel="stylesheet" type="text/css" href="..\Css\libreria.css" />
        <script src="../Javascrip/libreria.js"></script>
        <script src="../Javascrip/Obtener.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="..\Css\principal.css" />
        <link rel="stylesheet" type="text/css" href="../Css/Carrusel.css">
        <script defer src="../Javascrip/Carrusel.js"></script>
    </head>
    <body>
        <?php
        $servername = "127.0.0.1";
        $database = "Base_de_datos_Libreria";
        $username = "alumno";
        $password = "alumnoipm";
        $conexion = mysqli_connect($servername, $username, $password, $database);
        if (!$conexion) {
            die("Conexion fallida: " . mysqli_connect_error());
        }
        ?>
        <nav id="navBar">
        <a href="./libreria.php"><img id="perfil" src="../Imagenes/Img. principales/logo sin fondo.png" width="40" height="40"/></a>
        <ul class="menu-horizontal">
            <li>
                <img id="tres_rayas" src="../Imagenes/Img. principales/tres_rayas.png" width="30" height="30"/>
                <ul class="menu-vertical">
                    <?php
                    $resultado = mysqli_query($conexion,"select * from Categorias order by Nombre desc;");
                    while($fila=mysqli_fetch_assoc($resultado)){
                        ?>
                        <li><a href="#" class="categories" onclick="guardar_dato(<?php echo $fila['idCategorias']?>)"><?php echo $fila['Nombre']?></a><br><br>
                        <?php
                    }
                    ?>
                </ul>
            </li>
        </ul>
        <a href="">
            <span class="barra_de_busqueda" id="valor">0</span>
            <img class="barra_de_busqueda img_carrito" src="../Imagenes/Img. principales/Carrito de compras.png" width="30" height="30"/>
        </a>
        <form class="search-container" action="/Html/categorias.php?id=">
            <input type="text" id="search-input" name="buscar" placeholder="Buscar...">
            <button type="submit" value="submit" id="search-button"><img id="search" src="../Imagenes/Img. principales/search.png"></button>
        </form>
     </nav> 
        </div>  
        <div class="segundo_slider">
            <div class="slider">
                <ul class="splide__list">
                    <li class="splide__slide"><a href=""><img src="../Imagenes/Img. pag. principal/Propagandas/propaganda El-hobbit.jpg"></a></li>
                    <li class="splide__slide"><a href="file:///C:/Users/User/Downloads/Proyecto%20Html/Html/libreria.html"><img src="../Imagenes/Img. pag. principal/Propagandas/propaganda STILL_WITH_US.jpg"></a></li>
                    <li class="splide__slide"><a href=""><img src="../Imagenes/Img. pag. principal/Propagandas/propaganda Mientras_Yobooh_duerme.jpg"></a></li>
                    <li class="splide__slide"><a href=""><img src="../Imagenes/Img. pag. principal/Propagandas/propaganda alas de sangre.jpg"></a></li>
                    <li class="splide__slide"><a href=""><img src="../Imagenes/Img. pag. principal/Propagandas/propaganda Te_espero_en_el_fin_del_mundo.jpg"></a></li>
                    <li class="splide__slide"><a href="file:///C:/Users/User/Downloads/Proyecto%20Html/Html/libreria.html"><img src="../Imagenes/Img. pag. principal/Propagandas/propaganda alas de sangre.jpg"></a></li>
                </ul>
            </div>
        </div>
        <img src="">
            <div class="Carousel">
            <h1 class="titulos">NOVEDADES</h1>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                <?php
                $resultado = mysqli_query($conexion,"select * from Libro order by `Fecha de publicacion` desc;");
                while($fila=mysqli_fetch_assoc($resultado)){
                    ?>
                    <div class="slick">
                        <div>
                            <a href="#">
                                <picture>
                                    <img src="<?php echo $fila['Img']?>" alt="Image" onclick="obtener_dato(<?php echo $fila['idLibro']?>)">
                                </picture>
                                <div class ="precioynombre"><?php echo $fila['Nombre']?><br><small><?php echo $fila['Precio']; echo"$"?></small></div>
                            </a>
                        </div>
                    </div>
                    <?php
                }
                ?>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button>
            </div>
            <h1 class="titulos">MAS VENDIDOS</h1>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                <?php
                $resultado = mysqli_query($conexion,"select * from Libro order by `Cantidad de vendidos` desc;");
                while($fila=mysqli_fetch_assoc($resultado)){
                    ?>
                    <div class="slick">
                        <div>
                            <a href="#">
                                <picture>
                                    <img src="<?php echo $fila['Img']?>" alt="Image" onclick="obtener_dato(<?php echo $fila['idLibro']?>)">
                                </picture>
                                <div class ="precioynombre"><?php echo $fila['Nombre']?><small><?php echo $fila['Precio']?></small></div>
                            </a>
                        </div>
                    </div>
                    <?php
                }
                ?>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button>
            </div>
            <h1 class="titulos">JUVENILES</h1>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                <?php
                $resultado = mysqli_query($conexion,"select * from Libro where Categorias_idCategorias1 = 12 or Categorias_idCategorias = 12;");
                while($fila=mysqli_fetch_assoc($resultado)){
                    ?>
                    <div class="slick">
                        <div>
                            <a href="#">
                                <picture>
                                    <img src="<?php echo $fila['Img']?>" alt="Image" onclick="obtener_dato(<?php echo $fila['idLibro']?>)">
                                </picture>
                                <div class ="precioynombre"><?php echo $fila['Nombre']?><small><?php echo $fila['Precio']?></small></div>
                            </a>
                        </div>
                    </div>
                    <?php
                }
                ?>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button>
            </div>
        </div>
        <div class="blanco"></div>
        <footer id="navBar_bajo">
            <p id="contenedor_navBar_bajo">Contacto: 11 2222-4444</p>
        </footer>
        <script>
        const valor = document.getElementById('valor');
    const boton = document.getElementById('boton_comprar')
    valor.textContent = contador;
    </script>
    </body>
</html>