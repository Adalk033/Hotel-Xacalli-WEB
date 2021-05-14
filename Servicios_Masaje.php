<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="Estilos/Estilos-Servicios.css">
    <title>Servicios</title>
</head>
<body>
    <a name="Servicios"></a>
    <section class="Servicios">
        <br>
        <h2>Servicios</h2>
        <ul class="Lista_Servicios" align = "center">
            <li><button class="Boton_servicios"><a href="Servicios.php">Camping</a></button></li>
            <li><button class="Boton_servicios"><a href="Servicios_Asador.php">Asador</a></button></li>
            <li><button class="Boton_servicios"><a href="Servicios_Fogata.php">Fogata</a></button></li>
            <li><button class="Boton_servicios"><a href="Servicios_hiking.php">Hikin</a></button>  </li>
            <li><button class="Boton_servicios"><a href="Servicios_Masaje.php">Masaje</a></button></li>
            <li><button class="Boton_servicios"><a href="Servicios_Tele.php">Telescopio</a></button></li>
            <li><button class="Boton_servicios"><a href="Servicios_WIFI.php">Wifi</a></button></li>
            <br><br>
            <br><br>

        </ul>
    </section>

    <?php
        include "conect.php";
        $link=Conectarse();
         //Servicio 5
         $costo5 = mysqli_query($link, "Select costo from web_servicios where id_svo = '5'");
         $row_costo5 = mysqli_fetch_row($costo5);
 
         $duracion5 = mysqli_query($link, "Select duracion from web_servicios where id_svo = '5'");
         $row_duracion5 = mysqli_fetch_row($duracion5);
 
         $descripcion5 = mysqli_query($link, "Select descripcion from web_servicios where id_svo = '5'");
         $row_descripcion5 = mysqli_fetch_row($descripcion5);

         $result = mysqli_query($link, "SELECT imagen FROM web_servicios WHERE id_svo = '5'");
            $row = mysqli_fetch_row($result);    
        
    ?>

    <h2>Masaje</h2>
    <!-- Informacion container -->
    <div class="information-dad">
        <!-- Slideshow container -->
        <!--<img src="Imagenes/SV2.jpg" id="imagenP" alt="">-->
        <?php
            printf ("<img src='ruta/%s' class=\"imagen\"> ", $row[0]);
        ?>
        <!-- Texto container -->
        <div class="hijo">
            <p>El costo es: $<?php
                    echo "$row_costo5[0]";
                ?></p>
            <p>La duracion es: <?php
                    echo "$row_duracion5[0]";
                ?></p>
            <p> Acerca de: <?php
                    echo "$row_descripcion5[0]";
                ?></p>
        </div>
    </div>
  <br>

    <br><br><br><br>

    <footer class="foter">
        <div class="Foo-Text"  align="center">
            <p>©Hotel y Hospedaje Xacalli, S.A. DE C.V. México, 2021. Todos los derechos reservados.</p>
            <p>Callejon de Teminas 62520 Tepoztlán, Morelos, México</p>
            <p>Aviso de privacidad sobre el manejo de los datos</p>
        </div>
        <div class="Foo-Redes" align="right">
            <a href="https://www.facebook.com/XacalliEnTepoztlan" target="_blank" rel="nofollow"><img src="Imagenes/facebook-logo.png" alt="Logo de Facebook" width="5%"></a>
            <a href="https://bit.ly/Info_XacalliPosada" target="_blank" rel="nofollow"><img src="Imagenes/Whatsapp-logo.png" alt="Logo de Whatsapp" width="5%"></a>
        </div>   
    </footer>
</body>
</html>