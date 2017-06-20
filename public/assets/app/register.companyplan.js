$(function(){ 
	$.choose_plan = {
		init: function(callback) {
			$("[name=choose_plan] .btnsubmit").click(function() { $.choose_plan.plan($(this),callback); });   
		},
		plan:function(ths,callback){
         
		   var postdata = {};
		   postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
			$('body').removeClass('loaded');
			$.post('/company/planselect',postdata,function(response){   
			$('body').addClass('loaded');
				if(response.success)
                                {
                                   alert('hi');
                                    location.href = "company/payment";
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
