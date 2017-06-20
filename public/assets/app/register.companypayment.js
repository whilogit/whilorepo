$(function(){ 
	$.do_payment = {
		init: function(callback) {
			$("[name=do_payment] .btnsubmit").click(function() { $.do_payment.payment($(this),callback); });  
		},
		payment:function(ths,callback){
       
		   var postdata = {};
		   postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
			$('body').removeClass('loaded');
			$.post('/company/dopayment',postdata,function(response){   
			$('body').addClass('loaded');
				if(response.success)
                                {
                                    // alert('hi');
                                  location.href = "/company/reg_complete";
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
	$.do_payment.init();
})(jQuery);
