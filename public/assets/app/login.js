$(function(){ 
	$.login = {
		init: function(callback) {
			$("[name=login] .btnsubmit").click(function() { $.login.login($(this),callback); });
			$("[name=login] input").keyup(function() { $.login.validate($(this),callback); });
		},
		validate:function(ths,callback){
			if(ths.val()!="")ths.css('background-color', 'white').css('border-color','');
		},
		login:function(ths,callback){
		    var proceed = true;
			$('[name=login] [required=required]').filter(function() {
				if ($.trim(this.value) == "") {
					$(this).css('background-color', '#F7B9B5').css('border-color','red');
					proceed = false;
				} else {
					$(this).css('background-color', 'white').css('border-color','')
				}
            }); 
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
					$.post('/auth/signin',postdata,function(response){    
					$('body').addClass('loaded');
						if(response.success)
							location.href = response.url;
						else 
							{
							if ((typeof  response.errors) == 'object') { 
								var errorsHtml = ""; 
								$.each( response.errors, function( key, value ) {
									errorsHtml += '<li><i class="fa fa-times" style="color:#F00;"></i>' + value[0] + '</li>';
								});
								$('[name=login]  .responsereport').html('' + errorsHtml);
							}else{
								$('[name=login]  .responsereport li').html('' + response.errors);
							}
							
							}
					},'json');
				}
			
		 
		},
	}
	$.login.init();
})(jQuery);