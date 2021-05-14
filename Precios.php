<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/Precios.css">
    <title>Document</title>
</head>
<body>


    <?php 
        include "conect.php";
        $link=Conectarse();

        #si funciona
        $titulo_hbn1 = mysqli_query($link, "Select titulo from web_habitacion where id_hbn = '1'");
        $row_titulo_hbn1 = mysqli_fetch_row($titulo_hbn1);

        $desc_hbn1 = mysqli_query($link, "Select descripcion from web_habitacion where id_hbn = '1'");
        $row_desc_hbn1 = mysqli_fetch_row($desc_hbn1);

        $precio_hbn1 = mysqli_query($link, "Select costo from web_habitacion where id_hbn = '1'");
        $row_precio_hbn1 = mysqli_fetch_row($precio_hbn1);

        $titulo_hbn2 = mysqli_query($link, "Select titulo from web_habitacion where id_hbn = '3'");
        $row_titulo_hbn2 = mysqli_fetch_row($titulo_hbn2);

        $desc_hbn2 = mysqli_query($link, "Select descripcion from web_habitacion where id_hbn = '3'");
        $row_desc_hbn2 = mysqli_fetch_row($desc_hbn2);

        $precio_hbn2 = mysqli_query($link, "Select costo from web_habitacion where id_hbn = '3'");
        $row_precio_hbn2 = mysqli_fetch_row($precio_hbn2);

        $result = mysqli_query($link, "SELECT imagen FROM web_habitacion WHERE id_hbn = '1'");
        $row = mysqli_fetch_row($result);    
        
        $result2 = mysqli_query($link, "SELECT imagen FROM web_habitacion WHERE id_hbn = '3'");
        $row2 = mysqli_fetch_row($result2);    

        mysqli_close($link);
    ?>

    <a name="Precios"></a>
    <section class="Precios">
        <h2>Precios</h2>
        <table align="center" > 
            <tr align="center">
                <td widt = "50%">
                    <?php
                        printf ("<img src='ruta/%s' class=\"imagen\"> ", $row[0]);
                    ?>
                </td>
                <td width = "1%"></td>
                <td width = "50%">
                    <?php
                        printf ("<img src='ruta/%s' class=\"imagen\"> ", $row2[0]);
                    ?>
                </td>
            </tr>
            <tr align ="center">
                <td width = "50%">
                    <h3>
                    <?php
                        echo "$row_titulo_hbn1[0]";
                    ?>
                    </h3><br>
                    <h4>$<?php
                        echo "$row_precio_hbn1[0]";
                    ?></h4>
                </td>
                <td width = "1%"></td>
                <td width = "50%">
                    <h3> <?php
                        echo "$row_titulo_hbn2[0]";
                    ?></h3><br>
                    <h4>$<?php
                        echo "$row_precio_hbn2[0]";
                    ?></h4>
                </td>
            </tr>
            <tr align="center">
                <td width = "50%">
                    <p>
                        <?php 
                            printf ($row_desc_hbn1[0]);
                        ?>
                    </p>
                </td>
                <td width = "1%"></td>
                <td width = "50%">
                    <p>
                        <?php 
                            echo nl2br($row_desc_hbn2[0]);
                        ?>
                    </p>    
                </td>
            </tr>
        </table>
    </section>
    <br><br><br><br>

    <footer class="foter">
        <div class="Foo-Text"  align="center">
            <p>©Hotel y Hospedaje Xacalli, S.A. DE C.V. México, 2021. Todos los derechos reservados.</p>
            <p>Callejon de Teminas 62520 Tepoztlán, Morelos, México</p>
            <p><a href="#">Aviso de privacidad</a> sobre el manejo de los datos</p>
        </div>
        <div class="Foo-Redes" align="right">
            <a href="https://www.facebook.com/XacalliEnTepoztlan" target="_blank" rel="nofollow"><img src="Imagenes/facebook-logo.png" alt="Logo de Facebook" width="5%"></a>
            <a href="https://bit.ly/Info_XacalliPosada" target="_blank" rel="nofollow"><img src="Imagenes/Whatsapp-logo.png" alt="Logo de Whatsapp" width="5%"></a>
        </div>   
    </footer>

</body>
</html>