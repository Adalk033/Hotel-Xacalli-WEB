<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/Precios.css">
    
    <title></title>
</head>
<body>
    <a name="Precios"></a>
    <section class="Precios">
        <h2>Los precios han sido actualizados!</h2>
        <br>
        <p align="center"></p>
        <br>
        Numero de <?php $namehab1 = $_POST['habitaciones']; echo $namehab1 ?>
        <br><br>
        El nuevo nombre de la habitacion es: <?php $text1 = $_POST['areatexto1']; echo $text1 ?>
        <br><br>
        El nuevo precio de la habitacion es: <?php $costo1 = $_POST['areatexto2']; echo $costo1 ?>
        <br><br>
        La nueva descripcion es: <?php $desc3 = $_POST['areatexto3']; echo $desc3 ?>
        <br><br>

        <?php 
            if($namehab1 == "Habitacion numero 1")
                $id = 1;
            else
                $id = 3;
                
            include "Conect.php";
            $link=Conectarse();

            mysqli_query($link, "UPDATE web_habitacion SET costo=$costo1 WHERE id_hbn = '$id'");

            mysqli_query($link, "UPDATE web_habitacion SET titulo='$text1' WHERE id_hbn = '$id'");

            mysqli_query($link, "UPDATE web_habitacion SET descripcion='$desc3' WHERE id_hbn = '$id'");
            
            $nombre=$_POST['imagen'];

            $target_path='ruta/';

            $archivo =$_FILES["archivo"]['name'];

            $target_path=$target_path.basename($_FILES['archivo']['name']);
            
            if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)) 
            {

                $sql="update web_habitacion SET imagen = '$archivo' WHERE id_hbn = '$id'";
                mysqli_query($link,$sql) or die(mysqli_error($link));
            }
            else
            {
                header("Location: Cambio_precios.php");
                printf("No se pudo subir articulo: %s a la ruta: %s", $nombre);
            }
                

        ?>

        <p>Se subio correctamente la imagen</p>
    </section>
</body>
</html>