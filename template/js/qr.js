$(document).ready(function() {
    console.log("funciona");
    $("#codeForm").submit(function(){        
        
        $.ajax({
            url:'qr_mostrar.php',
            type:'POST',
            data: {formData:$("#content").val(), ecc:$("#ecc").val(), size:$("#size").val()},
            success: function(response) {
                $("#mensaje_modal").css("display","flex");
                
                setTimeout(function (){
                    $("#mensaje").toggleClass("mensaje-close");
                },50);
                $(".showQRCode").html(response);
            },
         });
        
    });
});


