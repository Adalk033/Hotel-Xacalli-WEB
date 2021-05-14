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
    <script src="Scripts/Vaidacion-Forms.js"></script>

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
            mysqli_close($link);
        ?>
        <table align="center">
            <form action="Info.php" name="formulario" method="POST">
                <tr>
                    <td>
                        Fecha a reservar:
                    </td>
                    <td>
                        <input type="date" name="Fecha" required size = "35" placeholder="Escriba la fecha">  
                    </td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>
                        Limite de estancia: 
                    </td>
                    <td>
                        <input type="date" name="Fecha2" required size = "35" placeholder="Escriba la fecha">  
                    </td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>
                        Habitacion: 
                    </td>
                    <td>
                        <input type="radio" name="radio" id="" value="Individual"> Individual
                        <br>
                        <input type="radio" name="radio" id="" value="Suite"> Suite
                    </td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>
                        Nombre: 
                    </td>
                    <td>
                        <input type="text" name="Nombre" required size = "35" placeholder="Escribe tu Nombre"> 
                    </td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>
                        Apellido(s): 
                    </td>
                    <td>
                        <input type="text" name="Apellido" required size = "35" placeholder="Escribe tu Apellido"> 
                    </td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>
                        Mascotas: 
                    </td>
                    <td>
                        <input type="number" name="Mascotas" required size = "10" placeholder="Cantidad de Mascotas" min="0"> 
                    </td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>
                        Nacionalidad: 
                    </td>
                    <td>
                        <input type="text" name="Nacionalidad" required size = "35" placeholder="Mexico"> 
                    </td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>
                        Telefono: 
                    </td>
                    <td>
                        <input type="text" name="Telefono" required size = "35" placeholder="Numero telefonico"> 
                    </td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>
                        Correo: 
                    </td>
                    <td>
                        <input type="email" name="Correo" required size = "35" placeholder="ejemplo@gmail.com"> 
                    </td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td colspan>
                        <input type= "button" name="Enviar" onclick="valida_envia()" value="Sumbit"> 
                    </td>

                </tr>
            </form>
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