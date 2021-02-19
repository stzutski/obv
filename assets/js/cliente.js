$(document).ready(function() {
  //esconde a img do preLoader da página
  $('#loading').hide();  
  
  //goto URL  
  $(".gotourl").click(function() {
    let gturl = $(this).attr("data-url");
    if(gturl!=''){
    window.location = gturl;
    }
  });





});
