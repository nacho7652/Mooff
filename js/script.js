$(document).ready(function(){  
   
    //diego 
       $('#login-fb').mouseover(function(){
           $(this).css('background','url(/mooff/images/login-face-sprite.png) -82px -24px no-repeat');
           $('#loginbtn-fb').css('background','url(/mooff/images/loginbtn-face-sprite.png) -0px -24px no-repeat')
       })
       $('#login-fb').mouseleave(function(){
           $(this).css('background','url(/mooff/images/login-face-sprite.png) top right no-repeat');
           $('#loginbtn-fb').css('background','url(/mooff/images/loginbtn-face-sprite.png) top right no-repeat')
       })
       
       $('.flecha-op').click(function(){
           $('.divoption').toggle();
       })
//       $('#top').click(function(){
//        // $('#top-login').toggle(); 
//         if($('body').css('margin-top') == '0px'){      
//              $('body').css('margin-top','170px')               
//         }else{
//              $('body').css('margin-top','0px')
//         }
//        });
        $('#playlistW').css('z-index','1000000');
        $('#contentW').css('right','0');
        
        $('.item-noticia').mouseover(function(){
            
            $(this).find('.content-noticia').slideDown(200);
        })
        $('.item-noticia').mouseleave(function(){
            $(this).find('.content-noticia').slideUp(200);
        })
        /*
         * #playlistW {
            z-index: 1000000 !important;
        }
        #contentW {
            right: 0 !important;
        }
                 */
    //diego
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
    
    $('#send').click(function(event){
        var nombre = $('#nom').val();
        var id = $('#id').val();
        var imagen = $('#img').val();
        if(nombre == '')
        {
            event.preventDefault();
            alert('Ingrese el nombre de la marca');
            $('#nom').focus();
            return;
        }
        if(id == '')
        {
            event.preventDefault();
            alert('Ingrese id de la marca');
            $('#id').focus();
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
