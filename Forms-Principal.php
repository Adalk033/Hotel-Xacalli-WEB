<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="Estilos/Forms.css">
    <title>Forms</title>
</head>
<body>
    <script src="Scripts/Vaidacion-Forms-Principal.js"></script>
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
            <tr>
                <td>
                    <h3>¿Ya has hecho una reservacion antes?</h3>
                </td>
            </tr>
            <form name="formulario" action="Info.php" method="POST">
                <tr>
                    <td>
                        <br>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="inlineRadio1">Si</label>
                            <input class="form-check-input" type="radio" name="radio" id="Si" value="option1">
                        </div>
                            
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="inlineRadio2">No</label>
                            <input class="form-check-input" type="radio" name="radio" id="No" value="option2">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <input class="btn btn-info" type="button" name="" id="bottom" value="Siguiente" onclick="valida_envia()">
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
            <p>Aviso de privacidad sobre el manejo de los datos</p>
        </div>
        <div class="Foo-Redes" align="right">
            <a href="https://www.facebook.com/XacalliEnTepoztlan" target="_blank" rel="nofollow"><img src="Imagenes/facebook-logo.png" alt="Logo de Facebook" width="5%"></a>
            <a href="https://bit.ly/Info_XacalliPosada" target="_blank" rel="nofollow"><img src="Imagenes/Whatsapp-logo.png" alt="Logo de Whatsapp" width="5%"></a>
        </div>   
    </footer>
</body>
</html>