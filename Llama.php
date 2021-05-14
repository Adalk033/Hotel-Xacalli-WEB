<?php
    // Conectarse.php

    include "Conect.php";
    $link = Conectarse();

    if($link){ 

        echo "Conexion con la Base de Datos Conseguida.<br>";

        mysqli_close($link); //Cierra la conexión
    }

?>