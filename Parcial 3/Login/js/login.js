$('document').ready(function () {

    $('#botonAceptar').click(botonIniciarSesion);
    
    $('#inputPassword').keypress(function(e) {
            if (e.keyCode == 13 ) { botonIniciarSesion(); }
    });
    
    
    function botonIniciarSesion() {
    
        var vLog = $('#inputLogin').val();
        var vPas = $('#inputPassword').val();
    
        if(vLog=="SuperUser" && vPas=="Password")
        {
            $.get("./php/login.php", {Login:vLog,Password:vPas}, console.log('Ingreso'));
    
            console.log('Login correcto');
    
            $('#myModal .modal-header').addClass('modal-header-success');
            $('#myModal .modal-header h2').text('Aceptado');
            $('#myModal .modal-body h3').text('Bienvenido');
            $('#myModal').modal();
    
            $("#myModal").on('shown.bs.modal',function() {
                $('#botonCerrar').focus();
                });
            $("#myModal").on('hidden.bs.modal',function() {
                $('#myModal .modal-header').removeClass('modal-header-success');
                $(location).attr('href',"index.php");
                });
            
        }
    }});