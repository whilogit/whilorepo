$(function(){ 
	$.jobseeker = {
		init: function(callback) {
			$("[name=jobseeker] .btnsubmit").click(function() { $.jobseeker.register($(this),callback); });
			$("[name=jobseeker] input").keyup(function() { $.jobseeker.validate($(this),callback); });
			$("[name=jobseeker] select").change(function() { $.jobseeker.validate($(this),callback); });
		},
		validate:function(ths,callback){
			if(ths.val()!="")ths.css('background-color', 'white').css('border-color','');
		},
		register:function(ths,callback){
		    var proceed = $('form[name=jobseeker]').parsley().validate();
            if(proceed) {
				 var postdata={}
				 var committies = [];
				 var input = $('[name=jobseeker]').serializeArray();
					$.each(input, function() {
						if (postdata[this.name] !== undefined) {
							if (!postdata[this.name].push) {
									postdata[this.name] = [o[this.name]];
							}
							postdata[this.name].push(this.value || '');
							
						} else {
							postdata[this.name] = this.value || '';
						}
					});
					postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
					$('body').removeClass('loaded');
					$.post('/auth/signup',postdata,function(response){  
						if(response.success){
						   	location.href = "/auth/signup";
						}
						else 
							{
							$('body').addClass('loaded');
							if ((typeof  response.errors) == 'object') { 
								var errorsHtml = ""; 
								$.each( response.errors, function( key, value ) {
									errorsHtml += '<li><i class="fa fa-times" style="color:#F00;"></i>' + value[0] + '</li>'; //showing only the first error.
								});
								$('[name=jobseeker]  .responsereport li').html('' + errorsHtml);
							}else{
								$('[name=jobseeker]  .responsereport li').html('<li><i class="fa fa-times" style="color:#F00;"></i>' + response.errors + '<li>');
							}
							
							}
					},'json');
				}
			
		 
		},
		
				
	}
	$.jobseeker.init();
})(jQuery);
