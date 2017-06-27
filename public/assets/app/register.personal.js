$(function(){  
	$.jpersonal = {
		init: function(callback) {
			$("[name=personal] .btnsubmit").click(function() { $.jpersonal.register($(this),callback); });
			$("[name=personal] input").keyup(function() { $.jpersonal.validate($(this),callback); });
			$("[name=personal] select").change(function() { $.jpersonal.validate($(this),callback); });
		},
		validate:function(ths,callback){
			if(ths.val()!="")ths.css('background-color', 'white').css('border-color','');
		},
		register:function(ths,callback){
		    var proceed = true;
			$('[name=personal] [required=required]').filter(function() {
				if ($.trim(this.value) == "") {
					$(this).css('background-color', '#F7B9B5').css('border-color','red');
					proceed = false;
				} else {
					$(this).css('background-color', 'white').css('border-color','')
				}
            }); 
            if(proceed) {
				 var postdata={}
				 var committies = [];
				 var input = $('[name=personal]').serializeArray();
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
					$.post('/auth/personal',postdata,function(response){  
						if(response.success)
							location.href = "/auth/signup";
						else 
							{
								$('[name=personal]  .responsereport li').html('<i class="fa fa-times" style="color:#F00;"></i>' + response.errors);	
							
							}
					},'json');
				}
			
		 
		},
		
				
	}
	$.jpersonal.init();
})(jQuery);
