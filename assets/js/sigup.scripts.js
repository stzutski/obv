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
              var errorForm=false;
              
                //reset color
                $('#rv_nome, #rv_cpf, #rv_nasc, #rv_email, #rv_local, #rv_ref').css('color','#898989');
                
                //valida nome e sobrenome
                if($('#userNome').val().length<4 && $('#userSobrenome').val().length<4){
                  $('#rv_nome').css('color','red');
                  $('#rv_nome').html('Confira o Nome ou Sobrenome');
                  errorForm=true;
                }else{
                  $('#rv_nome').html($('#userNome').val() +' '+ $('#userSobrenome').val() );
                }
                
                //valida cpf
                if( isValidCPF( $('#userCpf').val() )==false ){
                  $('#rv_cpf').css('color','red');
                  $('#rv_cpf').html('Parece incorreto');
                  errorForm=true;
                }else{
                  $('#rv_cpf').html( $('#userCpf').val() );
                }
                
                //valida dt nascimento
                if( $('#userNasc').val()=='' ){
                  $('#rv_nasc').css('color','red');
                  $('#rv_nasc').html('Parece incoreta');
                  errorForm=true;
                }else{
                  $('#rv_nasc').html( $('#userNasc').val() );             
                }
                
                //valida email
                if( IsEmail( $('#userEmail').val() ) == false ){
                  $('#rv_email').css('color','red');
                  $('#rv_email').html('Parece incorreto');
                  errorForm=true;
                }else{
                  $('#rv_email').html( $('#userEmail').val() );
                }

                //valida estado cidade
                if( $( "#userLocal" ).val() == '' ){
                //if( $( "#cidadeCli option:selected" ).text() == 'Selecione o Estado' ){
                  $('#rv_local').css('color','red');
                  $('#rv_local').html( 'Não selecionado' );
                  errorForm=true;
                }else{
                  $('#rv_local').html( $( "#cidadeCli option:selected" ).text() );
                }
                
                //valida referencia
                if( $( "#userFrom option:selected" ).text()=='Selecione' ){
                  $('#rv_ref').css('color','red');
                  $('#rv_ref').html('Não selecionado');
                  errorForm=true;
                }else{
                    $('#rv_ref').html( $( "#userFrom option:selected" ).text() );
                }
                
                //valida pwd
                if( $( "#clipwdcnf" ).val()=='' ){
                  $('#rv_pwd').css('color','red');
                  $('#rv_pwd').html('Não informada');
                  errorForm=true;
                }else{
                    $('#rv_pwd').html( '**************' );
                }
                
        }
        
        //register
        $("#btSubmit").click(function(e) {
          
          e.preventDefault();
          e.stopImmediatePropagation();          
          
          
          var formError=false;
          //check fields
          if($('#userNome').val().length<4 && $('#userSobrenome').val().length<4){formError=true;}
          if( isValidCPF( $('#userCpf').val() )==false ){formError=true;}
          if( $('#userNasc').val()=='' ){formError=true;}
          if( IsEmail( $('#userEmail').val() ) == false ){formError=true;}
          if( $( "#userLocal" ).val() == '' ){formError=true;}
          if( $( "#userFrom option:selected" ).text()=='Selecione' ){formError=true;}
          if( $( "#clipwdcnf" ).val()=='' ){formError=true;}
          
          if(formError){
              alert('Existem erros no formulário, por favor corrija antes do cadastro!');
          }else{
            
                          
              var dataForm = $( "#userRegistration" ).serialize();
               
                var request = $.ajax({
                  url: appPath + 'user/registration',
                  method: "POST",
                  data: dataForm,
                  dataType: "html",
                  success: function(data) {
                       //return data;
                       alert(data);
                       //if(data=='OK'){
                       //   alert('Cadastrado com sucesso!');
                       //}
                       //if(data=='ERROR'){
                       //   alert('Erro no cadastro, teste mais tarde!');
                       // }
                    }
                });            

            
          }
        });



      });


      $("#checkbox1").click(function() {
        if($('#checkbox1').is(':checked')){
          $('#btSubmit').removeAttr('disabled');
        }else{
          $('#btSubmit').attr('disabled','disabled');
          }
      });

      //recebe estado cidade (obsoleto)
      $( "#cidadeCli" ).change(function() {
        $('#userLocal').val( $( "#cidadeCli option:selected" ).text() ) ;
      });
        
        
      //consulta cidades pela UF
      $( "#ufCli" ).change(function() {
        var estado = $( this ).val();
        if(estado!='')
        {
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
      
      
      //confere campos senha e confirme senha
      $('#clipwd, #clipwdcnf').on('keyup', function () {
        if ($('#clipwd').val() == $('#clipwdcnf').val()) {
          $('.cnf-pwdfield-msg').html('campos conferem Ok!').css('color', 'green');
        } else 
          $('.cnf-pwdfield-msg').html('campos não conferem').css('color', 'red');
      });

});

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

      function isValidCPF(cpf) {
          if (typeof cpf !== "string") return false
          cpf = cpf.replace(/[\s.-]*/igm, '')
          if (
              !cpf ||
              cpf.length != 11 ||
              cpf == "00000000000" ||
              cpf == "11111111111" ||
              cpf == "22222222222" ||
              cpf == "33333333333" ||
              cpf == "44444444444" ||
              cpf == "55555555555" ||
              cpf == "66666666666" ||
              cpf == "77777777777" ||
              cpf == "88888888888" ||
              cpf == "99999999999" 
          ) {
              return false
          }
          var soma = 0
          var resto
          for (var i = 1; i <= 9; i++) 
              soma = soma + parseInt(cpf.substring(i-1, i)) * (11 - i)
          resto = (soma * 10) % 11
          if ((resto == 10) || (resto == 11))  resto = 0
          if (resto != parseInt(cpf.substring(9, 10)) ) return false
          soma = 0
          for (var i = 1; i <= 10; i++) 
              soma = soma + parseInt(cpf.substring(i-1, i)) * (12 - i)
          resto = (soma * 10) % 11
          if ((resto == 10) || (resto == 11))  resto = 0
          if (resto != parseInt(cpf.substring(10, 11) ) ) return false
          return true
      }
      
      function IsEmail(email){
          var exclude=/[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
          var check=/@[\w\-]+\./;
          var checkend=/\.[a-zA-Z]{2,3}$/;
          if(((email.search(exclude) != -1)||(email.search(check)) == -1)||(email.search(checkend) == -1)){return false;}
          else {return true;}
      }
