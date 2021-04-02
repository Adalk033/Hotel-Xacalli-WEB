<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                El nombre introducido es: <?php $nom = $_POST['Nombre']; echo $nom ?>
                El apellido introducido es: <?php $ap = $_POST['Apellido']; echo $ap ?>
                La fecha introducida es: <?php $fec = $_POST['Fecha']; echo $fec ?>
                La cantidad de mascotas es: <?php $mas = $_POST['Mascotas']; echo $mas ?>
                La nacionalidad introducida es: <?php $nac = $_POST['Nacionalidad']; echo $nac ?>
                El telefono introducido es: <?php $tel = $_POST['Telefono']; echo $tel ?>
                El correo introducido es: <?php $cor = $_POST['Correo']; echo $cor ?>
                <?php
                    if($_POST){
                    ?>
                <input type= "submit" value = "Enviar">
                Nombre : <?php echo "<input type='text' name='Nombre' value='".$nom."'>" ?><br>
                Apellido : <?php echo "<input type='text' name='Apellido' value='".$ap."'>" ?><br>
                Fecha : <?php echo "<input type='text' name='Fecha' value='".$fec."'>" ?> 
                Mascotas : <?php echo "<input type='text' name='Mascotas' value='".$mas."'>" ?> 
                Nacionalidad : <?php echo "<input type='text' name='Nacionalidad' value='".$nac."'>" ?> 
                Telefono: <?php echo "<input type='text' name='Telefono' value='".$tel."'>" ?> 
                Correo : <?php echo "<input type='text' name='Correo' value='".$cor."'>" ?>

</body>
</html>