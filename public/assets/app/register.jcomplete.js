$(function(){ 
	$.jcomplete = {
		init: function(callback) {
			$("[name=jcomplete] .btnsubmit").click(function() { $.jcomplete.complete($(this),callback); });
		},
		complete:function(ths,callback){
		   var postdata = {};
		   postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
			$('body').removeClass('loaded');
			$.post('/auth/jcomplete',postdata,function(response){   
			$('body').addClass('loaded');
				if(response.success)
					location.href = "/myaccount";
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
	$.jcomplete.init();
})(jQuery);
