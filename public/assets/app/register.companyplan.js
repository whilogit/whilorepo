$(function(){ 
    $('#expressbtn').on('click', function() {

      var postdata = {}
       var input = $('[name=expressPlan]').serialize();
      postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
      postdata['companyId']=$('input[name="companyid"]').val();
      postdata['planId']=$('input[name="planid"]').val();
       $('body').removeClass('loaded');
        $.post('/company/payment',postdata,function(response){   
                                         $('body').addClass('loaded');
                                                 if(response.success)
                                                 {

                                                     $('#append_ccavenu').html(response);
                                                    $('#ccavenu_form').submit();
                                                   
                                                   

                                                 }
                                                 });
     
});
    $('#enterprisebtn').on('click', function() {

      var postdata = {}
       var input = $('[name=expressPlan]').serialize();
      postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
      postdata['companyId']=$('input[name="companyid"]').val();
      postdata['planId']=$('input[name="planid"]').val();
       $('body').removeClass('loaded');
        $.post('/company/payment',postdata,function(response){   
                                         $('body').addClass('loaded');
                                                 if(response.success)
                                                 {

                                                     $('#append_ccavenu').html(response);
                                                    $('#ccavenu_form').submit();
                                                   
                                                   

                                                 }
                                                 });
       
});
$('#exclusivebtn').on('click', function() {

       var postdata = {}
       var input = $('[name=expressPlan]').serialize();
      postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
      postdata['companyId']=$('input[name="companyid"]').val();
      postdata['planId']=$('input[name="planid"]').val();
       $('body').removeClass('loaded');
        $.post('/company/payment',postdata,function(response){   
                                         $('body').addClass('loaded');
                                                 if(response.success)
                                                 {

                                                     $('#append_ccavenu').html(response);
                                                    $('#ccavenu_form').submit();
                                                   
                                                   

                                                 }
                                                 });
       
});
    
})(jQuery);