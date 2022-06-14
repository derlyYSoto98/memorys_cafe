$(document).ready(function(){
    /* alert('YES') */
    $.ajax({
        type: 'POST',
        url: 'modules/usuario_var.php',
        data: {'peticion': 'cargar_usuarios'}
    })
    .done(function(usuarios_asociados){
        $('#idusuario').html(usuarios_asociados)
        
    })
    .fail(function(){
        alert('Hubo un error al cargar las fincas')
    })




    $('#idusuario').on('change', function(){
        var id = $('#idusuario').val(); 
        /* console.log (id); */
      $.ajax({
            type: 'POST',
            url: 'modules/fincas_var.php',
            data: {'id': id}
        })
        .done(function(finca_asociados){
            $('#idfinca').html(finca_asociados)

            /* console.log(usuarios_asociados) */ 
        })
        .fail(function(){
            alert('Hubo un error al cargar las fincas')
        }) 
    })


    $('#idfinca').on('change', function(){
        var id2 = $('#idfinca').val(); 
        /* console.log (id); */
      $.ajax({
            type: 'POST',
            url: 'modules/variedad_var.php',
            data: {'id2': id2}
        })
        .done(function(variedad_asociados){
            $('#idvariead').html(variedad_asociados)
            /* console.log(usuarios_asociados)  */
        })
        .fail(function(){
            alert('Hubo un error al cargar la variedad')
        }) 
    })




    $('#idvariead').on('change', function(){
        var id3 = $('#idvariead').val(); 
        /* console.log (id); */
      $.ajax({
            type: 'POST',
            url: 'modules/proceso_var.php',
            data: {'id3': id3}
        })
        .done(function(proceso_asociados){
            $('#idproceso').html(proceso_asociados)
            /* console.log(usuarios_asociados)  */
        })
        .fail(function(){
            alert('Hubo un error al cargar el proceso')
        }) 
    })

})