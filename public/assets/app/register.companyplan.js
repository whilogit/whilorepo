/*
 * $(function(){ 
	$.choose_plan = {
		init: function(callback) {
			$("[name=expressPlan] .expressbtn").click(function() { $.choose_plan.plan($(this),callback); }); alert('hi')  ;
		},
		plan:function(ths,callback){
         
		   var postdata = {};
		   postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
			$('body').removeClass('loaded');
			$.post('/company/planselect',postdata,function(response){   
			$('body').addClass('loaded');
				if(response.success)
                                {
                                   //alert('hi');
                                    location.href = "/company/payment";
                                }
					
				else 
					{
					if ((typeof  response.errors) == 'object') { 
						var errorsHtml = ""; 
						$.each( response.errors, function( key, value ) {
							errorsHtml += '<li><i class="fa fa-times" style="color:#F00;"></i>' + value[0] + '</li>';
						});
						$('[name=company]  .responsereport li').html('' + errorsHtml);
					}else{
						$('[name=company]  .responsereport li').html('' + response.errors);
					}
					
					}
			},'json');
		},
	}
	$.choose_plan.init();
})(jQuery);

 */
$(function(){ 
    $('#expressbtn').on('click', function() {

      var postdata = {}
       var input = $('[name=expressPlan]').serialize();
      postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
      postdata['companyId']=$('input[name="companyid"]').val();
      postdata['planId']=$('input[name="planid"]').val();
       $('body').removeClass('loaded');
        $.post('/company/payment',postdata,function(response){  
         
                                               if(response)
                                               { 
                                               	  
                                                  $('#append_ccavenu').html(response);
                                                  $('#ccavenu_form').submit();
                                                
                                               }

                                                 });
     
});
    $('#enterprisebtn').on('click', function() {


	var postdata = {}
       var input = $('[name=enterprisePlan]').serialize();
      postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
      postdata['companyId']=$('input[name="enterprise_company_id"]').val();
      postdata['planId']=$('input[name="enterprise_plan_id"]').val();
       $('body').removeClass('loaded');
        $.post('/company/payment',postdata,function(response){  
         
                                               if(response)
                                               { 
                                               	  
                                                  $('#append_ccavenu').html(response);
                                                  $('#ccavenu_form').submit();
                                                
                                               }

                                                 });
       
});
$('#exclusivebtn').on('click', function() {

    var postdata = {}
      postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
      postdata['companyId']=$('input[name="exclusive_company_id"]').val();
      postdata['planId']=$('input[name="exclusive_plan_id"]').val();
       $('body').removeClass('loaded');
        $.post('/company/payment',postdata,function(response){  

                                               if(response)
                                               { 
                                               	 
                                                  $('#append_ccavenu').html(response);
                                                  $('#ccavenu_form').submit();
                                                
                                               }

                                                 });
       
       
});
    
})(jQuery);
