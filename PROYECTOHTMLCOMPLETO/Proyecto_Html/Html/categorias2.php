<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../Css/juveniles.css" />
        <link rel="stylesheet" type="text/css" href="..\Css\principal.css" />
        <script src="../Javascrip/Obtener.js"></script>
        <script src="../Javascrip/libreria.js"></script>

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
        <?php
        $id2 = $_GET['buscar'];
        $resultado = mysqli_query($conexion,"select * from Libro where Categorias_idCategorias1 = $id2 or Categorias_idCategorias = $id2;");
        $fila=mysqli_fetch_assoc($resultado);
        ?>
        <div class="contenedor">
        <?php
        if($fila == NULL){
            ?>
            <div class="no_hay_resultados" id="texto">No hay resultados</div><br>
            <div class="no_hay_resultados" id="texto">Novedades:</div><br>
            <?php
            $resultado = mysqli_query($conexion,"select * from Libro order by `Cantidad de vendidos` desc limit 15;");
            while($fila=mysqli_fetch_assoc($resultado)){
                ?>
                <div class="slick">
                    <div>
                        <a href="#">
                            <picture>
                                <img src="<?php echo $fila['Img']?>" alt="Image" onclick="obtener_dato(<?php echo $fila['idLibro']?>)">
                            </picture>
                            <div class ="precioynombre"><?php echo $fila['Nombre']?><br><small><?php echo $fila['Precio']?></small></div>
                        </a>
                    </div>
                </div>
                <?php
            }
        }else{
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
        }
        ?>
        </div>
        <div class="blanco"></div>
        <footer id="navBar_bajo" >
            <p id="contenedor_navBar_bajo">Contacto: 11 2222-4444</p>
        </footer>
        <script>
        const valor = document.getElementById('valor');
    const boton = document.getElementById('boton_comprar')
    valor.textContent = contador;
    </script>
    </body>
</html>