<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/Promociones.css">
    <title>Document</title>
</head>
<body>
    <a name="Promociones"></a>
    <section class="Promociones">
        <h2>Datos de promociones actualizados :D</h2>
        <br>
        <p align="center"></p>
        <br>
        <div class="Cambio-habitaciones">
        Numero de <?php $promocion = $_POST['promociones']; echo $promocion ?>
        <br><br>
        El nuevo nombre de la promocion es: <?php $prom1 = $_POST['nom_prom']; echo $prom1 ?>
        <br><br>
        El nuevo descuento de la promocion es: <?php $desc1 = $_POST['desc_prom']; echo $desc1 ?>
        <br><br>
        La nueva descripcion de la promocion es: <?php $desc3 = $_POST['text_prom']; echo $desc3 ?>
        <br><br>
        
        <?php 
        
            if($promocion == "Promocion 1")
                $id = 1;
            if($promocion == "Promocion 2")
                $id = 2;
            if($promocion == "Promocion 3")
                $id = 3;

            include "conect.php";
            $link=Conectarse();

            mysqli_query($link, "UPDATE web_promociones SET descuento='$desc1' WHERE id_pmn = '$id'");

            mysqli_query($link, "UPDATE web_promociones SET titulo='$prom1' WHERE id_pmn = '$id'");

            mysqli_query($link, "UPDATE web_promociones SET descripcion='$desc3' WHERE id_pmn = '$id'");

            $nombre=$_POST['imagen'];

            $target_path='ruta/';

            $archivo =$_FILES["archivo"]['name'];

            $target_path=$target_path.basename($_FILES['archivo']['name']);
            
            if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)) 
            {

                $sql="update web_promociones SET imagen = '$archivo' WHERE id_pmn = '$id'";
                mysqli_query($link,$sql) or die(mysqli_error($link));
            }
            else
            {
                header("Location: Cambio_promociones.html");
                printf("No se pudo subir articulo: %s", $nombre);
            }

        ?>


        </div>
    </section>
    <script src="Scritps/Promociones.js"></script>
</body>
</html>