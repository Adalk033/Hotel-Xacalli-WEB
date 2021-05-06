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
        <img src="Imagenes/Banner Principal.jpg" id="Banner-principal" alt="Banner" width="50%">
        Informacion recibida:
        <br><br>
        La fecha introducida es: <?php $fec = $_POST['Fecha']; echo $_POST['Fecha']; ?>
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
