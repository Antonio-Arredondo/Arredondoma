$('document').ready(function(){
    $('#boton').click(validate)
});

function validate(){

    var un = $("#usuario").val();
    var pass = $("#contraseña").val();
    
    if(un == "")
    {   
        alert("Ingresa un usuario!");

    }else if(pass == "")
    {
        alert("Ingrese su contraseña");

    }else if(un.length < 6){
        alert("El usuario debe contener 6 Caracteres!")

    } else if(pass.length <= 7){
        alert("Contraseña demasiado corta!")

    } else if(un=="Antonio" && pass=="12345678")
    {   
        confirm("Iniciando Sesion...!!!!!!!!!!");

    } else{
        alert("Ingrese datos validos!")

    }
    
}