<?php
    // Conectarse.php

    function Conectarse(){

        if(!($link = mysqli_connect("localhost", "root", "1234","proyecto_web2")))
        {
            echo "Error conectando a la base de datos.";
            exit();
        }

        return $link;
    }
?>