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

                                   var postdata = {}
                                   var input = $('[name=uploadjob]').serialize();
                                   postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
                                   postdata['jobtitle']=$('input[name="jobtitle"]').val();
                                   postdata['experience']=$('select[name="experience"]').val();
                                   postdata['joblocation']=$('select[name="joblocation"]').val();
                                   postdata['lastdate']=$('input[name="lastdate"]').val();
                                   postdata['shortdescription']=$('textarea#shortdescription').val();
                                   postdata['jobdescription']=$('textarea#jobdescription').val()
                                   postdata['salary']=$('select[name="salary"]').val();
                                   postdata['functionalarea']=$('select[name="functionalarea"]').val();
                                   postdata['rolecategory']=$('select[name="rolecategory"]').val();
                                   postdata['role']=$('select[name="role"]').val();
                                   postdata['joiningtime']=$('select[name="joiningtime"]').val();
                                   postdata['keyskills']=$('input[name="keyskills"]').val();
                                   postdata['education']=$('select[name="education"]').val();
                                   postdata['modeofemployeement']=$('select[name="modeofemployeement"]').val();
                                         $('body').removeClass('loaded');
                                         $.post('/upload/jobs',postdata,function(response){   
                                         $('body').addClass('loaded');
                                                 if(response.success)
                                                 {

                                                  $('#message').append('<span align="center" style="color:red;font-weight:bold"">'+response.msg+'</b></span>');

  
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
				}
			
		 
		},
		
				
	}
	$.uploadjobs.init();
})(jQuery);
