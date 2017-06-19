$(function(){ 
	$.company = {
		init: function(callback) {
			$("[name=company] .btnsubmit").click(function() { $.company.register($(this),callback); });
			$("[name=company] input").keyup(function() { $.company.validate($(this),callback); });
			$("[name=company] select").change(function() { $.company.validate($(this),callback); });
		},
		validate:function(ths,callback){
			if(ths.val()!="")ths.css('background-color', 'white').css('border-color','');
		},
		register:function(ths,callback){
		   var proceed = $('form[name=company]').parsley().validate();
            if(proceed) {
				 var postdata={}
				 var committies = [];
				 var input = $('[name=company]').serializeArray();
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
					$.post('/company/signup',postdata,function(response){   
					$('body').addClass('loaded');
						if(response.success)
							location.href = "/company/signup";
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
				}
			
		 
		},
		
				
	}
	$.company.init();
})(jQuery);
