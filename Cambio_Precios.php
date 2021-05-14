<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="Estilos/PreciosA.css">
    <title>Admin despues de login</title>
</head>
<body>
    <script src="Scripts/validacion_precios_boton.js"></script>
    
    <a name="Precios"></a>
    <section class="Precios">
        <h2>Precios</h2>
        <br>
        <p align="center">Aqui lo que se hara seran los cambios de la informacion de las habitaciones y de la imagen de las habitaciones segun seleccione</p>
        <br>
        <form action="act_precios.php" method="POST" name="formulario" enctype="multipart/form-data">
            <div class="Cambio-habitaciones">

                <div class="form-floating" id="select">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="habitaciones">
                        <option>Habitacion numero 1</option>
                        <option>Habitacion numero 2</option>
                    </select>
                    <label for="floatingSelect">Seleccione una habitacion</label><br><br>
                </div>
                
                <p>Cambio de nombre de la habitacion:</p>
                <textarea name = "areatexto1"></textarea>
                <br>
                <p>Cambio de precio de la habitacion:</p>
                <textarea name = "areatexto2">
                </textarea>
                <br>
                <p>Cambio de texto para la descripcion de la habitacion:</p>
                <textarea name = "areatexto3">
                </textarea>
                <br>
                <p>Cambio de imagen: </p>
                    Titulo: <input type="text" name="imagen" size="35" maxlength="70">
                <br>
                    <input type="file" name="archivo" id="archivo" size="25" maxlength="70">
                <br>
                <!--<p>Previsualizacion de la imagen: </p>
                <output id="list"></output>-->
                <br>
                    <!--<input type= "button" name="Enviar" onclick="valida_envia()" value="Sumbit">  -->
                    <div class="d-grid gap-2 col-3 mx-auto">
                    <input class="btn btn-primary" type="button" name="Enviar" onclick="valida_envia()" value="Submit"><br><br>
                    </div>
            </div>
        </form>
    </section>
    <script src="Scritps/Precios.js"></script>
</body>
</html>