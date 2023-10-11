<html>
    <head>
        <link rel="stylesheet" type="text/css" href="..\Css\libreria.css" />
        <script src="../Javascrip/libreria.js" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="..\Css\principal.css" />
    </head>
    <body>
        <?php
        $servername = "127.0.0.1";
        $database = "Libreria";
        $username = "alumno";
        $password = "alumnoipm";
        $conexion = mysqli_connect($servername, $username, $password, $database);
        if (!$conexion) {
            die("Conexion fallida: " . mysqli_connect_error());
        }
        else{
        //$resultado=mysqli_query($conexion,"insert into usuarios values(null, '$Nombre');");
		$resultado = mysqli_query($conexion,"select * from Libro;");
        echo "Datos que hay en la base:\n";
        while($fila=mysqli_fetch_assoc($resultado)){
            ?>
            <p><?php echo $fila['img']?></p>
            <?php
        }
        }
        ?>
        <nav id="navBar">
            <img id="perfil" src="../Imagenes/Img. principales/logo sin fondo.png" width="40" height="40"/>
            <ul class="menu-horizontal">
                <li>
                    <a href=""><img id="barra_de_busqueda" src="../Imagenes/Img. principales/tres_rayas.png" width="30" height="30"/></a>    
                    <ul class="menu-vertical">
                        <li><a href="" class="categories">Arte y Diseño</a><br><br>
                            <li><a href="" class="categories">Autoayuda</a><br><br>
                            <li><a href="" class="categories">Ciencias de la Salud</a><br><br>
                            <li><a href="" class="categories">Computación y Sistemas</a><br><br>
                            <li><a href="" class="categories">Ciencias Sociales</a><br><br>
                            <li><a href="" class="categories">Lingüística</a><br><br>
                            <li><a href="" class="categories">Esoterismo</a><br><br>
                            <li><a href="" class="categories">Ficción</a><br><br>
                            <li><a href="" class="categories">Gastronomía</a><br><br>
                            <li><a href="" class="categories">Hogar</a><br><br>
                            <li><a href="" class="categories">Hotelería y Turismo</a><br><br>
                            <li><a href="" class="categories">Humanidades</a><br><br>
                            <li><a href="./juveniles.html" class="categories">Juveniles</a><br><br>
                            <li><a href="" class="categories">Deportes y Recreación</a><br><br>
                            <li><a href="" class="categories">Ciencias Económicas</a><br><br>
                  </ul>
                </li>
            </ul>
            <a href=""><img id="barra_de_busqueda" src="../Imagenes/Img. principales/Carrito de compras.png" width="30" height="30"/></a>
            <div class="search-container">
                <input type="text" id="search-input" placeholder="Buscar...">
                <button id="search-button"><img id="search" src="../Imagenes/Img. principales/search.png"></button>
            </div>
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
        <h1 class="titulos">MAS VENDIDOS</h1>
        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <div class="carousel">
            <?php
		    $resultado = mysqli_query($conexion,"select * from Libro order by `cant. vendidos` desc;");
            while($fila=mysqli_fetch_assoc($resultado)){
                ?>
                <a href=""><img class="libros1" src="<?php echo $fila['img']?>"  onclick="funcion('idLibro')"></a>
                <?php
            }
            ?>
            </div>
            <i id="right" class="fa-solid fa-angle-right"></i>
          </div>
        <h1 class="titulos">NOVEDADES</h1>
        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <div class="carousel">
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/donde todo brilla.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/fantasia/un cuento perfecto.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/fantasia/la cancion del lobo.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/el dia que dejo de nevar en alaska.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/hearstopper.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/al final mueren los dos.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/la biblioteca de la medianoche.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/donde todo brilla.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/fantasia/un cuento perfecto.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/fantasia/la cancion del lobo.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/el dia que dejo de nevar en alaska.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/hearstopper.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/al final mueren los dos.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/la biblioteca de la medianoche.jpg"></a>
            </div>
            <i id="right" class="fa-solid fa-angle-right"></i>
          </div>
        <h1 class="titulos">IMPORTADOS</h1>
        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <div class="carousel">
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/donde todo brilla.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/fantasia/un cuento perfecto.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/fantasia/la cancion del lobo.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/el dia que dejo de nevar en alaska.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/hearstopper.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/al final mueren los dos.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/la biblioteca de la medianoche.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/donde todo brilla.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/fantasia/un cuento perfecto.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/fantasia/la cancion del lobo.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/el dia que dejo de nevar en alaska.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/hearstopper.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/al final mueren los dos.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/la biblioteca de la medianoche.jpg"></a>
            </div>
            <i id="right" class="fa-solid fa-angle-right"></i>
          </div>   
        <h1 class="titulos">BOX SETS</h1>
        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <div class="carousel">
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/donde todo brilla.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/fantasia/un cuento perfecto.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/fantasia/la cancion del lobo.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/el dia que dejo de nevar en alaska.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/hearstopper.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/al final mueren los dos.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/la biblioteca de la medianoche.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/donde todo brilla.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/fantasia/un cuento perfecto.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/fantasia/la cancion del lobo.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/el dia que dejo de nevar en alaska.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/hearstopper.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/al final mueren los dos.jpg"></a>
                <a href=""><img class="libros1" src="../Imagenes/Img. libros/contemporaneo/la biblioteca de la medianoche.jpg"></a>
            </div>
            <i id="right" class="fa-solid fa-angle-right"></i>
          </div>
        <div class="blanco"></div>
        <footer id="navBar_bajo">
            <p id="contenedor_navBar_bajo">Contacto: 11 2222-4444</p>
        </footer>
    </body>
</html>
