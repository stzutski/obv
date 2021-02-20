$(document).ready(function() {
  $('#loading').hide();   

  var counter = 10;
  var interval = setInterval(function() {
      counter--;
      $('#tmPwdRec').html('Solicite uma nova mensagem em '+counter+' segundos');
      // Display 'counter' wherever you want to display it.
      if (counter == 0) {
          // Display a login box
          $('#tmPwdRec').html('<a href="#" class="recpwdmsg" data-ui="123" data-hs="222">Clique aqui para receber uma nova mensagem</a>');
          clearInterval(interval);
      }
  }, 1000);
  
  
  $(document).on("click", "a.recpwdmsg" , function(e) {
    e.preventDefault();
    let hashUser = $('#cdhsh').val(); 

    var counter = 10;
    var interval = setInterval(function() {
        counter--;
        $('#tmPwdRec').html('Solicite uma nova mensagem em '+counter+' segundos');
        // Display 'counter' wherever you want to display it.
        if (counter == 0) {
            // Display a login box
            $('#tmPwdRec').html('<a href="#" class="recpwdmsg">Clique aqui para receber uma nova mensagem</a>');
            clearInterval(interval);
        }
    }, 1000);

    alert('nova mensagem');   
    
    
    $.post(apth+'user/new-pwd', { uhsh : hashUser}, 
        function(returnedData){
             alert(returnedData);
    });    
    
    
     
  });  
  
          
});     
