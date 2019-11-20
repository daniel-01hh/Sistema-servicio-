jQuery("#editar").click(function(){        
    //cogemos el valor del input
    var num = jQuery("#matricula").val();

    //creamos array de par�metros que mandaremos por POST
    var params = {
        "numFactorial" : num
    };

    //llamada al fichero PHP con AJAX
    $.ajax({
        data:  params,
        url:   'ajax/factorial.php',
        dataType: 'html',
        type:  'post',
        beforeSend: function () {
            //mostramos gif "cargando"
            jQuery('#loading_spinner').show();
            //antes de enviar la petici�n al fichero PHP, mostramos mensaje
            jQuery("#resultado").html("D�jame pensar un poco...");
        },
        success:  function (response) {
            //escondemos gif
            jQuery('#loading_spinner').hide();
            //mostramos salida del PHP
            jQuery("#resultado").html(response);

        }
    });
});