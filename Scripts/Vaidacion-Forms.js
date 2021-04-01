function valida_envia()
{ 
    //validacion de la fecha----in progress
    if (document.formulario.Fecha.value.length==0)
    { 
        alert("Tiene que escribir su nombre") 
        document.fvalida.nombre.focus() 
        return 0; 
    } 
    
    //validacion del nombre
    if (document.formulario.Nombre.value=="")
    { 
        alert("Tiene que introducir un nombre") 
        document.formulario.Nombre.focus() 
        return 0; 
    }
    
    //validacion de apellidos
    if (document.formulario.Apellido.value=="")
    { 
        alert("Tiene que introducir uno o dos apellidos") 
        document.formulario.Apellido.focus() 
        return 0; 
    } 
    
    //validacion de mascotas
    if (document.formulario.Mascotas.value=="")
    { 
        alert("Tiene 0 o mas mascotas") 
        document.formulario.Mascotas.focus() 
        return 0; 
    }

    //validacion de Nacionalidad
    if (document.formulario.Nacionalidad.value=="")
    { 
        alert("Tiene que introducir su nacionalidad") 
        document.formulario.Nacionalidad.focus() 
        return 0; 
    }

    //validacion de Telefono
    if (document.formulario.Telefono.value=="")
    { 
        alert("Tiene que introducir su Telefono") 
        document.formulario.Telefono.focus() 
        return 0; 
    }

    //validacion de correo
    if (document.formulario.Correo.value=="")
    { 
        alert("Tiene que introducir su Correo") 
        document.formulario.Correo.focus() 
        return 0; 
    }
    
    //el formulario se envia 
    alert("Muchas gracias por enviar el formulario"); 
    document.fvalida.submit(); 
}   