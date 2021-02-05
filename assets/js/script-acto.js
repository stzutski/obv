$(document).ready(function() {
  // Handler for .ready() called.



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
      Alertify.dialog.alert(alm);

    } else if (ald == 'log') {
      //data-ntDialog="log" data-ntType="success|error" data-ntMsg="mensagem do log"
      if (alt == 'success') {
        Alertify.log.success(alm);
      } else if (alt == 'error') {
        Alertify.log.error(alm);
      } else if (alt == 'info') {
        Alertify.log.info(alm);
      } else {
        Alertify.log.info('OPS:: Log não definido!');
      }

    } else if (ald == 'confirm') {
      //data-ntDialog="confirm" data-ntMsg="Confirma?" data-ntEval="foo('bar')"
      Alertify.dialog.confirm(alm, function() {
        // user clicked "ok"
        if (ale != '') {
          eval(ale);
        }
      }, function() {
        // user clicked "cancel"
        Alertify.log.error('CANCELADO!');
      });

    } else {

      Alertify.log.info('Tipo não definido!');

    }


  });

});