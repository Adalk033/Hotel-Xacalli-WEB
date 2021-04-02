
function valida_envia()
{ 
    if(document.formulario.radio.value=="")
    {
        alert("Tiene que seleccionar una opcion") 
        return 0; 
    }

    if(document.getElementById("No"))
        window.location.replace('Forms.html');
    if(document.getElementById("Si"))
        window.location.replace('Forms-Secundario.html');
}   


