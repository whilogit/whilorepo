$(function(){  
	$.jeducation = {
		init: function(callback) {
			$("[name=education] .btnsubmit").click(function() { $.jeducation.register($(this),callback); });
			$("[name=education] .btnaddnew").click(function() { $.jeducation.newqualification($(this),callback); });
			$("[name=education] input").keyup(function() { $.jeducation.validate($(this),callback); });
			$("[name=education] select").change(function() { $.jeducation.validate($(this),callback); });
			$(document).on('click', '[name=education] ul li .close', function() { if(parseInt($(this).closest('ul').find('li').length) != 1) $(this).closest('li').remove(); });
			
		},
		validate:function(ths,callback){
			if(ths.val()!="")ths.css('background-color', 'white').css('border-color','');
		},
		newqualification:function(ths,callback){ 
			$("[name=education] .newqualification").append(newrow);
		},
		register:function(ths,callback){
		    var proceed = true;
			$('[name=education] [required=required]').filter(function() {
				if ($.trim(this.value) == "") {
					$(this).css('background-color', '#F7B9B5').css('border-color','red');
					proceed = false;
				} else {
					$(this).css('background-color', 'white').css('border-color','')
				}
            }); 
            if(proceed) {
				 var postdata={};
				 var data=[];
				 var serialized = $('[name=education]').serializeArray();  
					for (i=0; i<serialized.length-1; i+=6) {
						var tmpObj = {};
						tmpObj[ serialized[i].name ] = serialized[i].value;
						tmpObj[ serialized[i+1].name ] = serialized[i+1].value;
						tmpObj[ serialized[i+2].name ] = serialized[i+2].value;
						tmpObj[ serialized[i+3].name ] = serialized[i+3].value;
						tmpObj[ serialized[i+4].name ] = serialized[i+4].value;
						tmpObj[ serialized[i+5].name ] = serialized[i+5].value;
						data.push(tmpObj);
					}
					postdata['qualification']=data;
					postdata['_token'] = $('meta[name="csrf-token"]').attr('content');  
					postdata['keyskill'] = $('[name=education] [name=keyskills]').val();
					$('body').removeClass('loaded');  
					$.post('/auth/qualification',postdata,function(response){   
						if(response.success)
							location.href = "/auth/signup";
						else{ 
							$('body').addClass('loaded');
							if ((typeof  response.errors) == 'object') { 
								var errorsHtml = ""; 
								$.each( response.errors, function( key, value ) {
									errorsHtml += '<li><i class="fa fa-times" style="color:#F00;"></i>' + value[0] + '</li>'; //showing only the first error.
								});
								$('[name=education]  .responsereport').html('' + errorsHtml);
							}else{
								$('[name=education]  .responsereport').html('<li><i class="fa fa-times" style="color:#F00;"></i>' + response.errors + '<li>');
							}
						}
					},'json');
				}
			
		 
		},
		
				
	}
	$.jeducation.init();
})(jQuery);
