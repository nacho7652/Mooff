$(document).ready(function(){   
      $('#insert_news').click(function(){
          var titulo=$('#title').val();
          var cuerpo=$('#body_news').val();
          //var imagen=$('#img').val();
         $.ajax({
              type: "POST",
              dataType: "json",
              url: "/mooff/function/noticia-response.php",
              data: "insertNew=1&titulo="+titulo+"&cuerpo="+cuerpo,
              success : function (data)
              {  
                  alert("Noticia Ingresada");
                   if(data.re==1)
                       {
                          alert("Noticia Ingresada");
                       }
                       else
                       {
                          alert("Noticia no Ingresada");
                       }                               
              }              
         })
    });
})
