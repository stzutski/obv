$(document).ready(function() {
  // Handler for .ready() called.

  //esconde a img do preLoader da página
  $('#loading').hide();

  //caixas de confirmacao e alerta do alertify
  $(".clickfy").click(function() {
    /*
    data-ntDialog="alert" data-ntMsg="Isto é um alerta"
    data-ntDialog="log" data-ntType="success|error|info" data-ntMsg="mensagem do log"
    data-ntDialog="confirm" data-ntMsg="Confirma?" data-ntEval="foo('bar')"
    */

    var ald = $(this).attr("data-ntDialog"); //tipo de dialog
    var alt = $(this).attr("data-ntType"); //tipo de alerta success | error
    var alm = $(this).attr("data-ntMsg"); //mensagem para exibir no Alert (str)
    var ale = $(this).attr("data-ntEval"); //mensagem para exibir no Alert (str)


    if (ald == 'alert') {
      //data-ntDialog="alert" data-ntMsg="Isto é um alerta"
      alertify.alert(alm);

    } else if (ald == 'log') {
      //data-ntDialog="log" data-ntType="success|error" data-ntMsg="mensagem do log"
      if (alt == 'success') {
        alertify.success(alm);
      } else if (alt == 'error') {
        alertify.error(alm);
      } else if (alt == 'info') {
        alertify.log(alm);
      } else {
        alertify.log('OPS:: Log não definido!');
      }

    } else if (ald == 'confirm') {

      //data-ntDialog="confirm" data-ntMsg="Confirma?" data-ntEval="foo('bar')"

      // confirm dialog
      alertify.confirm(alm, function(e) {
        if (e) {
          // user clicked "ok"
          eval(ale);
        } else {
          // user clicked "cancel"
          alertify.error('CANCELADO!');
        }
      });

    } else {

      alertify.log('Tipo não definido!');

    }


  });



  $('.pwdfield, .cnf-pwdfield').on('keyup', function () {
    if ($('.pwdfield').val() == $('.cnf-pwdfield').val()) {
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
    var color = "";
    var passwordStrength = "";
    switch(passed){
        case 0:
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
    }
    password_strength.innerHTML = passwordStrength;
    password_strength.style.color = color;
}


$( "#sw-hd-pwd" ).click(function() {
  $('.hd-pwd').toggleClass( "itemNoDisplay" );
    
  if ($('.hd-pwd').hasClass("itemNoDisplay")) {
    $('.pwdf').prop('required',false);
  }else{
    $('.pwdf').prop('required',true);
  }
  
  
  
  
});
