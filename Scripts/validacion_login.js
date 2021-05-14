

function valida_envia()
{ 
    
     //validacion de la fecha
     if (document.formulario.usuario.value=="")
     { 
         alert("Tiene que introducir un Usuario") 
         document.formulario.usuario.focus() 
         return 0; 
     }
 
     //validacion del limite de estancia
     if (document.formulario.pass.value=="")
     { 
         alert("Tiene que introducir un Password") 
         document.formulario.pass.focus() 
         return 0; 
     }

     if (document.formulario.usuario.value !="admin")
     { 
         alert("Usuario o password incorrecto") 
         return 0; 
     }

     if (document.formulario.pass.value != "admin")
     { 
         alert("Usuario o password incorrecto") 
         document.formulario.pass.focus() 
         return 0; 
     }


    //el formulario se envia 
    document.formulario.submit();
}   