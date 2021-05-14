<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/Forms.css">
    <title>Forms</title>
</head>
<body>
    <br><br>
    <section class="Formulario">
        <?php
            include "conect.php";
            
            $link=Conectarse();
            
            $result = mysqli_query($link, "SELECT imagen FROM principal WHERE id = '6'");

            $row = mysqli_fetch_row($result);    


        ?>

        <?php
            printf ("<img src='ruta/%s' id=\"Banner-principal\"> ", $row[0]);
        ?>

        Informacion recibida:
        <br><br>
        La fecha introducida es: <?php $fec = $_POST['Fecha']; echo $fec ?>
        <br><br>
        El limite de estancia es: <?php $fec2 = $_POST['Fecha2']; echo $fec2 ?>
        <br><br>
        La habitacion seleccionada es: <?php $hab = $_POST["radio"]; echo $hab ?>
        <br><br>
        El nombre introducido es: <?php $nom = $_POST['Nombre']; echo $nom ?>
        <br><br>
        El apellido introducido es: <?php $ap = $_POST['Apellido']; echo $ap ?>
        <br><br>
        La cantidad de mascotas es: <?php $mas = $_POST['Mascotas']; echo $mas ?>
        <br><br>
        La nacionalidad introducida es: <?php $nac = $_POST['Nacionalidad']; echo $nac ?>
        <br><br>
        El telefono introducido es: <?php $tel = $_POST['Telefono']; echo $tel ?>
        <br><br>
        El correo introducido es: <?php $cor = $_POST['Correo']; echo $cor ?>        
        <br>    
    </section>

    <br><br><br><br>

    <?php 
        mysqli_query($link, "insert into web_cliente (nombre, apellido, telefono, mascotas, nacionalidad, email, id_epo) values('$nom', '$ap', '$tel', $mas, '$nac', '$cor', '2')");

        $cliente = mysqli_query($link, "Select id_cte from web_cliente where email = '$cor'");
        $row_cliente = mysqli_fetch_row($cliente);
        

        $precio_hbn = mysqli_query($link, "Select costo from web_habitacion where titulo = '$hab'");
        $row_hbn=mysqli_fetch_row($precio_hbn);

        $precio_adl = $row_hbn[0]/2;
        
        $id_hbn = mysqli_query($link, "Select id_hbn from web_habitacion where titulo = '$hab'");
        $row_id_hbn=mysqli_fetch_row($id_hbn);

        mysqli_query($link, "insert into WEB_CLIENTEHABITACION (fecha_de_reservacion, fecha_de_inicio, fecha_de_fin, pago_adelantado, id_cte, id_hbn) 
                                                            values(SYSDATE(), '$fec', '$fec2', $precio_adl, $row_cliente[0], $row_id_hbn[0])");

        mysqli_close($link);
    ?>



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
