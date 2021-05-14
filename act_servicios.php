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
    <section class="Precios">
        <h2>Los servicios han sido actualizados!</h2>
        <br>
        <p align="center"></p>
        <br>
        Nombre del servicio <?php $namesev = $_POST['Servicios']; echo $namesev ?>
        <br><br>
        El nuevo costo del servicio es: <?php $text1 = $_POST['text_costo']; echo $text1 ?>
        <br><br>
        La nueva duracion es: <?php $dura = $_POST['text_duracion']; echo $dura ?>
        <br><br>
        La nueva descripcion es: <?php $desc3 = $_POST['text_desc']; echo $desc3 ?>
        <br><br>

        <?php 
            if($namesev == "Camping")
                $id = 1;
            if($namesev == "Asador")
                $id = 2;
            if($namesev == "Fogata")
                $id = 3;
            if($namesev == "Hiking")
                $id = 4;
            if($namesev == "Masaje")
                $id = 5;
            if($namesev == "Telescopio")
                $id = 6;
            if($namesev == "Wifi")
                $id = 7;
                
            include "Conect.php";
            $link=Conectarse();

            mysqli_query($link, "UPDATE web_servicios SET costo=$text1 WHERE id_svo = '$id'");

            mysqli_query($link, "UPDATE web_servicios SET duracion='$dura' WHERE id_svo = '$id'");

            mysqli_query($link, "UPDATE web_servicios SET descripcion='$desc3' WHERE id_svo = '$id'");
            
            $nombre=$_POST['imagen'];

            $target_path='ruta/';

            $archivo =$_FILES["archivo"]['name'];

            $target_path=$target_path.basename($_FILES['archivo']['name']);
            
            if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)) 
            {

                $sql="update web_servicios SET imagen = '$archivo' WHERE id_svo = '$id'";
                mysqli_query($link,$sql) or die(mysqli_error($link));
            }
            else
            {
                header("Location: Cambio_servicios.html");
                printf("No se pudo subir articulo: %s a la ruta: %s", $nombre);
            }
                

        ?>

        <p>Se subio correctamente la imagen</p>
    </section>
</body>
</html>