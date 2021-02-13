$(document).ready(function () {

      $(".bt-next").click(function() {
        
        var fromCard  = $(this).attr("data-from"); //from card
        var goCard    = $(this).attr("data-go"); //to card
        
        $('#'+fromCard).hide();
        $('#'+goCard).show();
        $('.step-2, .step-3').removeClass('btn-primary');
        
        if(goCard=='step-1'){ $('.step-2, .step-3').removeClass('btn-primary'); }
        if(goCard=='step-2'){ $('.step-1, .step-2').addClass('btn-primary'); }
        if(goCard=='step-3'){ $('.step-1, .step-2, .step-3').addClass('btn-primary'); }

      });

});
