<?php

    include("conect.php");

    $link=conectarse();

    $nombre=$_POST['nombre'];

    $target_path='ruta/';

    $archivo =$_FILES["archivo"]['name'];

    $target_path=$target_path.basename($_FILES['archivo']['name']);

    if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)) {

        $sql="update principal SET imagen = '$archivo' WHERE id = '6'";

        #$sql="insert into principal (nombre, imagen) values('$nombre','$archivo')";

        mysqli_query($link,$sql) or die(mysqli_error($link));
        echo "El archivo se subio correctamente";
        //sleep(10);
        header("Location: Cambio_pagina_principal.php");
    }

    else

        //sleep(10);
        header("Location: Cambio_pagina_principal.php");
        printf("No se pudo subir articulo: %s a la ruta: %s", $nombre,$destino);
        
        

?>