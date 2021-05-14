<? php session_start(); //Inicia la sesión 
//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO 
if (!$_SESSION )
{ //si no existe, envio a la página de autentificacion 
header("Location: index2.php"); 
//ademas salgo de este script 
exit(); 
} 
?>