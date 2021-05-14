<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/Banner.css">
    <title>Cambio banner</title>
</head>
<body>
    <br>
    <section class="Formulario">
        <h2>Cambio de pagina principal</h2>
        <br>
        <p>Aqui se hace el cambio de la imagen principal que unicamente es una imagen.</p>
        <br><br>
        <!-- 
        <input type="file" id="files" name="files[]" />
        <br>
        <p>Previsuzalicion de la imagen: </p>
        <output id="list"></output>
        
        <br>
        <button>Guardar</button> -->
        <Form action="subirarchivo.php" Method="POST" enctype="multipart/form-data">

            <table width="40%" align="center">

            <tr> <td width="10%"> Titulo: </td>

            <td width="30%"> <input type="text" name="nombre" size="35" maxlength="70"> </td>

            </tr>

            <tr> <td> Archivo </td>

            <td> <input type="file" name="archivo" id="archivo" size="25" maxlength="70"> </td>

            </tr>

            <tr> <td colspan="2"> <br><br> </td>

            </tr>

            <tr> <td align="center" colspan="3"><input type="submit" name="accion" value="Enviar"></td> </tr>

            </table>

        </form>
    </section>

    <br><br>
    <br>
    <script src="Scritps/Banner.js"></script>
</body>
</html>