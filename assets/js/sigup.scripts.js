$(document).ready(function () {

        
      $(".bt-next").click(function() {
        
        var fromCard  = $(this).attr("data-from"); //from card
        var goCard    = $(this).attr("data-go"); //to card
        
        $('#'+fromCard).hide();
        $('#'+goCard).show();
        $('.step-2, .step-3').removeClass('btn-primary');
        
        if(goCard=='step-1'){ $('.step-2, .step-3').removeClass('btn-primary'); }
        if(goCard=='step-2'){ $('.step-1, .step-2').addClass('btn-primary'); }
        if(goCard=='step-3'){ $('.step-1, .step-2, .step-3').addClass('btn-primary'); 

          $('#rv_nome').html( $('#userNome').val() + ' ' + $('#userSobrenome').val() );
          $('#rv_cpf').html( $('#userCpf').val() );
          $('#rv_nasc').html( $('#userNasc').val() );
          $('#rv_email').html( $('#userEmail').val() );
          $('#rv_local').html( $('#userLocal').val() );
          $('#rv_ref').html( $( "#userFrom option:selected" ).text() );
          
        }

      });





      $( "#cidadeCli" ).change(function() {
        
        //$( "#cidadeCli option:selected" ).text();  
        //alert( $( "#cidadeCli option:selected" ).text() ); 
        $('#userLocal').val( $( "#cidadeCli option:selected" ).text() ) ;
        
      });
        
        
        
      $( "#ufCli" ).change(function() {
        var estado = $( this ).val();
        if(estado!='')
        {
            //alert(appPath + 'consulta/cidades/uf/' + estado + '/form/select');
            var listaEstados = appPath + 'consulta/cidades/uf/' + estado + '/form/select';
                    
              sendRequest();
              function sendRequest(){
                  $.ajax({
                    url: listaEstados,
                    success:
                      function(data){
                       $('#cidadeCli').html(data); //load data
                    }
                 });
                }
        
        }else{
          $('#cidadeCli').html('<option value="">Selecione o Estado</option>'); //load data  
        }
      });

      
      

      $('#clipwd, #clipwdcnf').on('keyup', function () {
        if ($('#clipwd').val() == $('#clipwdcnf').val()) {
          $('.cnf-pwdfield-msg').html('campos conferem Ok!').css('color', 'green');
        } else 
          $('.cnf-pwdfield-msg').html('campos não conferem').css('color', 'red');
      });
          
      
      
      
      

});

      function chkCampo(id,size){
        
        if($(id).val().length < size){
          $(id).css("color", "red");
        }else{
          $(id).css("color", "#898989");
        }
        
      }




      function CheckPasswordStrength(password) {
        var password_strength = document.getElementById("password_strength");


          //if textBox is empty
          if(password.length==0){
              password_strength.innerHTML = "";
              return;
          }

          //Regular Expressions
          var regex = new Array();
          regex.push("[A-Z]"); //For Uppercase Alphabet
          regex.push("[a-z]"); //For Lowercase Alphabet
          regex.push("[0-9]"); //For Numeric Digits
          regex.push("[$@$!%*#?&]"); //For Special Characters


          var passed = 0;

          //Validation for each Regular Expression
          for (var i = 0; i < regex.length; i++) {
              if((new RegExp (regex[i])).test(password)){
                  passed++;
              }
          }

          //Validation for Length of Password
          if(passed > 2 && password.length > 8){
              passed++;
          }else{
              passed--;
          }

          //Display of Status
          var color = "Red";
          var passwordStrength = "";
          switch(passed){
              case 0:
                  passwordStrength = "Senha insegura.";
                  color = "Red";              
                  break;
              case 1:
                  passwordStrength = "Senha insegura.";
                  color = "Red";
                  break;
              case 2:
                  passwordStrength = "Boa senha.";
                  color = "darkorange";
                  break;
              case 3:
                      break;
              case 4:
                  passwordStrength = "Senha segura.";
                  color = "Green";
                  break;
              case 5:
                  passwordStrength = "Senha muito segura.";
                  color = "darkgreen";
                  break;
              default:
                  passwordStrength = "Senha insegura.";
                  color = "Red";
              
          }
          password_strength.innerHTML = passwordStrength;
          password_strength.style.color = color;
      }


      function validaCPF(strCPF) {
          var Soma;
          var Resto;
          Soma = 0;
        if (strCPF == "00000000000") return false;

        for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
        Resto = (Soma * 10) % 11;

          if ((Resto == 10) || (Resto == 11))  Resto = 0;
          if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;

        Soma = 0;
          for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
          Resto = (Soma * 10) % 11;

          if ((Resto == 10) || (Resto == 11))  Resto = 0;
          if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
          return true;
      }
      
      function chkCpf(id){
          var cpf = $(id).val();
          if(!validaCPF(cpf)){
            $(id).css("color", "red");
          }else{
            $(id).css("color", "#898989");  
          }
      }
