
function valida_envia()
{ 
    //validacion de la fecha----in progress
    if (document.formulario.Fecha.value=="")
    { 
        alert("Tiene que introducir una fecha") 
        document.formulario.Fecha.focus() 
        return 0; 
    }

    //validacion de limite de estancia
    if (document.formulario.Fecha2.value=="")
    { 
        alert("Tiene que introducir una fecha") 
        document.formulario.Fecha2.focus() 
        return 0; 
    }

    //validacion de Habitacion
    if (document.formulario.radio.value=="")
    { 
        alert("Tiene que introducir una fecha") 
        document.formulario.radio.focus() 
        return 0; 
    }

    //validacion de correo
    if (document.formulario.Correo.value=="")
    { 
        alert("Tiene que introducir su Correo") 
        document.formulario.Correo.focus() 
        return 0;   
    }
    else
    {
        valor = document.formulario.Correo.value;
        if (!(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)))
        {
            alert("La dirección de email es incorrecta.");
            document.formulario.Correo.focus()
            console.log(valor)
            return false;
        }
    }
    
    //validacion de mascotas
    if (document.formulario.Mascotas.value=="")
    { 
        alert("Tiene 0 o mas mascotas") 
        document.formulario.Mascotas.focus() 
        return 0; 
    }
    
    //el formulario se envia 
    alert("Muchas gracias por enviar el formulario"); 
    document.formulario.submit(); 
}   


window.onload = function()
{
    var fecha = new Date(); //Fecha actual
    var mes = fecha.getMonth()+1; //obteniendo mes
    var dia = fecha.getDate(); //obteniendo dia
    var ano = fecha.getFullYear(); //obteniendo año
    if(dia<10)
      dia='0'+dia; //agrega cero si el menor de 10
    if(mes<10)
      mes='0'+mes //agrega cero si el menor de 10
    document.formulario.Fecha.min=ano+"-"+mes+"-"+dia;
    document.formulario.Fecha.value=ano+"-"+mes+"-"+dia;
    document.formulario.Fecha2.min=ano+"-"+mes+"-"+dia;
    document.formulario.Fecha2.value=ano+"-"+mes+"-"+dia;
}