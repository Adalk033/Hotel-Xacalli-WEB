<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/Promociones.css">
    <title>Document</title>
</head>
<body>
    <?php 
        include "conect.php";
        $link=Conectarse();

        #si funciona
        $titulo_promo1 = mysqli_query($link, "Select titulo from web_promociones where id_pmn = '1'");
        $row_titulo_promo1 = mysqli_fetch_row($titulo_promo1);

        $desc_promo1 = mysqli_query($link, "Select descripcion from web_promociones where id_pmn = '1'");
        $row_desc_promo1 = mysqli_fetch_row($desc_promo1);

        $descuento_promo1 = mysqli_query($link, "Select descuento from web_promociones where id_pmn = '1'");
        $row_descuento_promo1 = mysqli_fetch_row($descuento_promo1);

        $titulo_promo2 = mysqli_query($link, "Select titulo from web_promociones where id_pmn = '2'");
        $row_titulo_promo2 = mysqli_fetch_row($titulo_promo2);

        $desc_promo2 = mysqli_query($link, "Select descripcion from web_promociones where id_pmn = '2'");
        $row_desc_promo2 = mysqli_fetch_row($desc_promo2);

        $descuento_promo2 = mysqli_query($link, "Select descuento from web_promociones where id_pmn = '2'");
        $row_descuento_promo2 = mysqli_fetch_row($descuento_promo2);

        $titulo_promo3 = mysqli_query($link, "Select titulo from web_promociones where id_pmn = '3'");
        $row_titulo_promo3 = mysqli_fetch_row($titulo_promo3);

        $desc_promo3 = mysqli_query($link, "Select descripcion from web_promociones where id_pmn = '3'");
        $row_desc_promo3 = mysqli_fetch_row($desc_promo3);

        $descuento_promo3 = mysqli_query($link, "Select descuento from web_promociones where id_pmn = '3'");
        $row_descuento_promo3 = mysqli_fetch_row($descuento_promo3);

        $result = mysqli_query($link, "SELECT imagen FROM web_promociones WHERE id_pmn = '1'");
        $row = mysqli_fetch_row($result);    
        
        $result2 = mysqli_query($link, "SELECT imagen FROM web_promociones WHERE id_pmn = '2'");
        $row2 = mysqli_fetch_row($result2);    
        
        $result3 = mysqli_query($link, "SELECT imagen FROM web_promociones WHERE id_pmn = '3'");
        $row3 = mysqli_fetch_row($result3);    

        mysqli_close($link);
    ?>




    <a name="Promociones"></a>
    <section class="Promociones">
        <h2>Promociones</h2>
        <div>
            <table align="center" border="0"> 
                <tr align="center" class="tabla-promo">
                    <td width = "20%"><?php
                        printf ("<img src='ruta/%s' class=\"imagen\"> ", $row[0]);
                    ?></td>
                    <td width = "5%"></td>
                    <td width = "20%"><?php
                        printf ("<img src='ruta/%s' class=\"imagen\"> ", $row2[0]);
                    ?></td>
                    <td width = "5%"></td>
                    <td width = "20%"><?php
                        printf ("<img src='ruta/%s' class=\"imagen\"> ", $row3[0]);
                    ?></td>
                </tr>
                <tr align ="center">
                    <td width = "20%">
                        <h3> <?php
                                echo "$row_titulo_promo1[0]";
                            ?></h3><br>
                        <h4> <?php
                                echo nl2br("$row_descuento_promo1[0]");
                            ?></h4>
                    </td>
                    <td width = "5%"></td>
                    <td width = "20%">
                        <h3><?php
                                echo "$row_titulo_promo2[0]";
                            ?></h3><br>
                        <h4><?php
                                echo nl2br("$row_descuento_promo2[0]");
                            ?></h4>
                    </td>
                    <td width = "5%"></td>
                    <td width = "20%">
                        <h3><?php
                                echo "$row_titulo_promo3[0]";
                            ?></h3><br>
                        <h4><?php
                                echo nl2br("$row_descuento_promo3[0]");
                            ?></h4>
                    </td>
                </tr>
                <tr align="center">
                    <td class="Promos" width = "20%">
                        <?php
                            printf("$row_desc_promo1[0]");
                        ?>
                    </td>
                    <td width = "5%"></td>
                    <td class="Promos" width = "20%">
                    <?php
                            printf("$row_desc_promo2[0]");
                        ?>
                        </td>
                    <td width = "5%"></td>
                    <td class="Promos" width = "20%">
                    <?php
                            printf("$row_desc_promo3[0]");
                        ?>   
                    </td>
                </tr>
            </table>
        </div>
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