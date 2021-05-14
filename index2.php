<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Estilos/Login.css">
    <title>Login Admin</title>
</head>
<body>
    <script src="Scripts/validacion_login.js"></script>
    <h1>
        Administracion
    </h1>
    <section class="login">
        <form action="control.php" method="POST" name="formulario">
            <?php
                if ( $_POST ) 
                { if ($_POST['errorusuario']==1)
                {
            ?> 
            <?php 
                }
                    }
                else
                {?> <Font color="black">Introduce tu clave de acceso </Font>
                <?php 
                } 
            ?>

            <br>
            Usuario: <input type="text" name="usuario" id="">
            <br>
            Password: <input type="password" name="pass" id="">
            <br>
            <input type= "button" name="Enviar" onclick="valida_envia()" value="Iniciar sesion" class="btn btn-info">  
            <br>
        </form>
    </section>
</body>
</html>