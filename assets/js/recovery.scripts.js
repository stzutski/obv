$(document).ready(function() {
  $('#loading').hide();   

  var counter = 120;
  var interval = setInterval(function() {
      counter--;
      $('#tmPwdRec').html('Solicite uma nova mensagem em '+counter+' segundos');
      // Display 'counter' wherever you want to display it.
      if (counter == 0) {
          // Display a login box
          $('#tmPwdRec').html('<a href="'+apth+'user/new-pwd" class="recpwdmsg">Clique aqui para solicitar uma nova mensagem</a>');
          clearInterval(interval);
      }
  }, 1000);
  
  
  
  
  $(".btrecpwd").click(function() {
    $('#loading').show();
  });
  
  
  
  $(document).on("click", "a.recpwdmsg" , function(e) {
    e.preventDefault();
    let hashUser = $('#cdhsh').val(); 

    var counter = 120;
    var interval = setInterval(function() {
        counter--;
        $('#tmPwdRec').html('Solicite uma nova mensagem em '+counter+' segundos');
        // Display 'counter' wherever you want to display it.
        if (counter == 0) {
            // Display a login box
            $('#tmPwdRec').html('<a href="'+apth+'user/new-pwd" class="recpwdmsg">Clique aqui para solicitar uma nova mensagem</a>');
            clearInterval(interval);
        }
    }, 1000);
    
    $.post(apth+'user/new-pwd', { uhsh : hashUser}, 
        function(returnedData){
             alert(returnedData);
    });    
    
    
     
  });  
  
          
});     
