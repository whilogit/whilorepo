$(function(){  
	$.login = {
		init: function(callback) {
			$("[name=login] [name=btnlogin]").click(function() { $.login.login($(this),callback); });
			$("[name=login] input").keyup(function(e) { $.login.validate(e,callback); });
		},
		validate:function(e,callback){
			var code = (e.keyCode ? e.keyCode : e.which);
				if(code == 13) { 
					$("[name=login] [name=btnlogin]").click();
				}
			
		},
		login:function(ths,callback){
		    var proceed = $('form[name=login]').parsley().validate();
            if(proceed) {
				 var postdata={}
				 var input = $('[name=login]').serializeArray();
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
					$.post('/admin/auth/signin',postdata,function(response){    
					    $('body').addClass('loaded');
						if(response.success)
							location.href = "/dashboard/companylist";
						else 
							{
							if ((typeof  response.errors) == 'object') { 
								var errorsHtml = ""; 
								$.each( response.errors, function( key, value ) {
									errorsHtml += '<li><i class="fa fa-times" style="color:#F00;"></i>' + value[0] + '</li>';
								});
								$('[name=login]  .responsereport').html('' + errorsHtml);
							}else{
								$('[name=login]  .responsereport').html('<li><i class="fa fa-times" style="color:#F00;"></i>' + response.errors + "</li>");
							}
							
							}
					},'json');
				}
			
		 
		},
	}
	$.login.init();
})(jQuery);