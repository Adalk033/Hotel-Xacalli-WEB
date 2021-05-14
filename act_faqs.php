<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/Faqs.css">
    <title>Document</title>
</head>
<body>
    <a name="FAQS"></a>
    <section class="FAQS" align="Left">
    <h2>Las preguntas y respuestas han sido actualizados!</h2><br>
    <div class="Cambio-habitaciones">
    Esta es la  <?php $pregunta = $_POST['faqs']; echo $pregunta ?>
    <br><br>
    La nueva pregunta es: <?php $preg = $_POST['preg_text']; echo $preg ?>
    <br><br>
    La respuesta de la pregunta es: <?php $res = $_POST['res_text']; echo $res ?>
    <br><br>


    <?php 
        
        if($pregunta == "Pregunta 1")
            $id = 1;
        if($pregunta == "Pregunta 2")
            $id = 2;
        if($pregunta == "Pregunta 3")
            $id = 3;
        if($pregunta == "Pregunta 4")
            $id = 4;
        if($pregunta == "Pregunta 5")
            $id = 5;

        include "conect.php";
        $link=Conectarse();

        mysqli_query($link, "UPDATE web_faqs SET pregunta='$preg' WHERE id_faqs = '$id'");

        mysqli_query($link, "UPDATE web_faqs SET respuesta='$res' WHERE id_faqs = '$id'");

        
        mysqli_close($link);
    ?>
    
    </div>
    </section>
</body>
</html>