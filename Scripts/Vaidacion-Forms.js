function valida_envia()
{ 
    //validacion de la fecha----in progress
    if (document.formulario.Fecha.value.length==0)
    { 
        alert("Tiene que escribir su nombre") 
        document.fvalida.nombre.focus() 
        return 0; 
    } 
    
    //valido del nombre
    if (document.formulario.Nombre.value=="")
    { 
        alert("Tiene que introducir un nombre") 
        document.formulario.Nombre.focus() 
        return 0; 
    }
    
    //valido el inter�s 
    if (document.fvalida.interes.selectedIndex==0)
    { 
        alert("Debe seleccionar un motivo de su contacto.") 
        document.fvalida.interes.focus() 
        return 0; 
    } 
    
    //el formulario se envia 
    alert("Muchas gracias por enviar el formulario"); 
    document.fvalida.submit(); 
} 