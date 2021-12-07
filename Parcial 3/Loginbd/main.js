jQuery(document).on('submit','#formlg', function(event){
    event.preventDefault();

    jQuery.ajax({
        url:'main_app/login.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){

        }
    })
    .done(function(respuesta){
        console.log("sucess");
        location.href = 'indecs.php';
    })
    .fail(function(resp){
        console.log("error");
        location.href = 'indecs.php';
    })
    .always(function(){
        console.log("complete");
    })
});
/*Alta */
jQuery(document).on('submit','#form1', function(event){
    event.preventDefault();

    jQuery.ajax({
        url:'main_app/login.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){

        }
    })

});
jQuery(document).on('submit','#formlg', function(event){
    event.preventDefault();

    jQuery.ajax({
        url:'main_app/login.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){

        }
    })
    .done(function(respuesta){
        console.log("sucess");
        location.href = 'indecs.php';
    })
    .fail(function(resp){
        console.log("error");
        location.href = 'indecs.php';
    })
    .always(function(){
        console.log("complete");
    })
});
jQuery(document).on('submit','#formlg', function(event){
    event.preventDefault();

    jQuery.ajax({
        url:'main_app/login.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){

        }
    })
    .done(function(respuesta){
        console.log("sucess");
        location.href = 'indecs.php';
    })
    .fail(function(resp){
        console.log("error");
        location.href = 'indecs.php';
    })
    .always(function(){
        console.log("complete");
    })
});