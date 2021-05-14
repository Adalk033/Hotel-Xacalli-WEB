<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/Faqs.css">
    <title>Document</title>
</head>
<body>

    <?php 
            include "conect.php";
            $link=Conectarse();

            #si funciona
            $pregunta1 = mysqli_query($link, "Select pregunta from web_faqs where id_faqs = '1'");
            $row_pregunta1 = mysqli_fetch_row($pregunta1);

            $respuesta1 = mysqli_query($link, "Select respuesta from web_faqs where id_faqs = '1'");
            $row_respuesta1 = mysqli_fetch_row($respuesta1);

            $pregunta2 = mysqli_query($link, "Select pregunta from web_faqs where id_faqs = '2'");
            $row_pregunta2 = mysqli_fetch_row($pregunta2);

            $respuesta2 = mysqli_query($link, "Select respuesta from web_faqs where id_faqs = '2'");
            $row_respuesta2 = mysqli_fetch_row($respuesta2);

            $pregunta3 = mysqli_query($link, "Select pregunta from web_faqs where id_faqs = '3'");
            $row_pregunta3 = mysqli_fetch_row($pregunta3);

            $respuesta3 = mysqli_query($link, "Select respuesta from web_faqs where id_faqs = '3'");
            $row_respuesta3 = mysqli_fetch_row($respuesta3);

            $pregunta4 = mysqli_query($link, "Select pregunta from web_faqs where id_faqs = '4'");
            $row_pregunta4 = mysqli_fetch_row($pregunta4);

            $respuesta4 = mysqli_query($link, "Select respuesta from web_faqs where id_faqs = '4'");
            $row_respuesta4 = mysqli_fetch_row($respuesta4);

            $pregunta5 = mysqli_query($link, "Select pregunta from web_faqs where id_faqs = '5'");
            $row_pregunta5 = mysqli_fetch_row($pregunta5);

            $respuesta5 = mysqli_query($link, "Select respuesta from web_faqs where id_faqs = '5'");
            $row_respuesta5 = mysqli_fetch_row($respuesta5);

            mysqli_close($link);
        ?>


    <a name="FAQS"></a>
    <section class="FAQS">
    <h2>FAQS</h2><br>
    <table class="lista-faqs">
        <tr>
            <td><?php
                    echo "$row_pregunta1[0]";
                ?></td>
        </tr>
        <tr height = "40px">
            <td><?php
                    echo "$row_respuesta1[0]";
                ?></td>
        </tr>
        <tr>
            <td><?php
                    echo "$row_pregunta2[0]";
                ?></td>
        </tr>
        </tr>
        <tr height = "40px">
            <td><?php
                    echo "$row_respuesta2[0]";
                ?></td>
        </tr>
        <tr>
            <td><?php
                    echo "$row_pregunta3[0]";
                ?></td>
        </tr>
        </tr>
        <tr height = "40px">
            <td><?php
                    echo "$row_respuesta3[0]";
                ?></td>
        </tr>
        <tr>
            <td><?php
                    echo "$row_pregunta4[0]";
                ?></td>
        </tr>
        </tr>
        <tr height = "40px">
            <td><?php
                    echo "$row_respuesta4[0]";
                ?></td>
        </tr>
        <tr>
            <td><?php
                    echo "$row_pregunta5[0]";
                ?></td>
        </tr>
        </tr>
        <tr height = "40px">
            <td><?php
                    echo "$row_respuesta5[0]";
                ?></td>
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