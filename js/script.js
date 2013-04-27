$(document).ready(function(){  
    $('#enviar').click(function(event){
        var titulo = $('#title').val();
        var cuerpo = $('#body_new').val();
        var imagen = $('#img').val();
        if(titulo == '')
        {
            event.preventDefault();
            alert('Ingrese titulo de noticia');
            $('#title').focus();
            return;
        }
        if(cuerpo == '')
        {
            event.preventDefault();
            alert('Ingrese cuerpo de noticia');
            $('#body_new').focus();
            return;
        }
        if(imagen == '')
        {
            event.preventDefault();
            alert('Seleccione una imagen');
            $('#img').focus();
            return;
        }
        
    });
//      $('#insert_news').click(function(){
//          var titulo=$('#title').val();
//          //var cuerpo=$('#body_news').val();
//          //var imagen=$('#img').val();
//         $.ajax({
//              type: "POST",
//              dataType: "html",
//              url: "/mooff/function/noticia-response.php",
//              data: "insertNew=1&titulo="+titulo,
//              beforeSend: function(){
//                $("#insert_news").val('Enviando....');
//              },
//              success : function (data)
//              { 
//                  $("#insert_news").val('Enviado');
//                  $('#error').append(data);
//              }, 
//              error : function(xhr, ajaxOptions, thrownError)
//              {
//                 $("#insert_news").val('Intente nuevamente'); 
//                 alert(xhr.status);
//                 alert(thrownError);
//                 alert(ajaxOptions);
//              }
//         })
//    });
})
