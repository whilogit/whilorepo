$(function(){ 
	$.uploadjobs = {
		init: function(callback) {
			$("[name=uploadjob] .btnsubmit").click(function() { $.uploadjobs.register($(this),callback); });
			$("[name=uploadjob] input").keyup(function() { $.uploadjobs.validate($(this),callback); });
			$("[name=uploadjob] select").change(function() { $.uploadjobs.validate($(this),callback); });
		},
		validate:function(ths,callback){
			if(ths.val()!="")ths.css('background-color', 'white').css('border-color','');
		},
		register:function(ths,callback){   
			$('[name=uploadjob]  .responsereport').html('');
		    var proceed = true;
			$('[name=uploadjob] [required=required]').filter(function() { 
				if ($.trim(this.value) == "") {
					$(this).css('background-color', '#F7B9B5').css('border-color','red');
					proceed = false;
				} else {
					$(this).css('background-color', 'white').css('border-color','')
				}
            });
			if(proceed){
				$('[name=uploadjob] [name=keyskills]').filter(function() { 
				if ($.trim(this.value) == "") {
					$('[name=uploadjob]  .responsereport').html('<li><i class="fa fa-times" style="color:#F00;"></i> Please choose the keyskill</li>');
					proceed = false;
				} 
           	 });
			}
			
			if(proceed){
				if($("[name=jobdescription]").sceditor('instance').val().trim() == ""){
					$('[name=uploadjob]  .responsereport').html('<li><i class="fa fa-times" style="color:#F00;"></i> Please write somethng about your job description</li>');
					proceed = false;
				}
			}
			
			if(proceed) {
				 var postdata={}
				 $('body').removeClass('loaded');
				 var input = $('[name=uploadjob]').serializeArray();
					var formData = new FormData(); 
					$.each(input, function() {  
						if(this.name=="jobdescription")formData.append(this.name,$("[name=jobdescription]").sceditor('instance').getWysiwygEditorValue(false)); 
							else formData.append(this.name,this.value);
					});
					$('body').removeClass('loaded');
					formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
						$.ajax({
							url:"/upload/jobs",
							cache: false,
							contentType: false,
							processData: false,
							async: false,
							data: formData,
							type: 'post',
							success: function(response) {  $('body').addClass('loaded');  
								$('body').addClass('loaded'); 
								if(response.success){  
								 	$.confirm({
										title: 'Success!',
										content: 'Job successfully uploaded',
										confirmButton: 'View Dashboard',
										cancelButton: 'Add more',
										confirm: function(){
											location.href="/myaccount"
										},
										cancel: function(){ location.href="/upload/jobs"
										}
									});
								}else {
									if ((typeof  response.errors) == 'object') { 
										var errorsHtml = ""; 
										$.each( response.errors, function( key, value ) {
											errorsHtml += '<li><i class="fa fa-times" style="color:#F00;"></i>' + value[0] + '</li>'; //showing only the first error.
										});
										$('[name=jobseeker]  .responsereport').html('' + errorsHtml);
									}else{
										$('[name=jobseeker]  .responsereport').html('<li>' + response.errors + '</li>');
									}
								}
							}
						});
				}
			
		 
		},
		
				
	}
	$.uploadjobs.init();
})(jQuery);
