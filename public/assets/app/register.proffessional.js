 
	$.jproffessional = {
		init: function(callback) {
			$("[name=proffessional] .btnsubmit").click(function() { $.jproffessional.register($(this),callback); });
			$("[name=proffessional] input").keyup(function() { $.jproffessional.validate($(this),callback); });
			$("[name=proffessional] select").change(function() { $.jproffessional.validate($(this),callback); });
			
			$(document).on('change', '[name=proffessional] select[name=currentstatus]', function() { $.jproffessional.emailinputs($(this),callback);  });
			
			$("[name=proffessional] select[name=expiriencestatus]").change(function() { $.jproffessional.exprinputs($(this),callback); });
			$(document).on('click', '[name=proffessional] .btnaddnew', function() {  $(document).find('.row').find('.expirience').append(expirience); });
			$(document).on('click', '[name=proffessional] ul li .close', function() {  $(this).closest('li').remove(); });
		},
		validate:function(ths,callback){
			if(ths.val()!="")ths.css('background-color', 'white').css('border-color','');
		},
		emailinputs:function(ths,callback){ 
			switch(parseInt(ths.val())){
				case 1:case 2: {
					ths.closest('.row').find('.emaillist').html(email);
					break;
				}
				default : ths.closest('.row').find('.emaillist').html(''); break;
			}
		},
		exprinputs:function(ths,callback){ 
			switch(parseInt(ths.val())){
				case 2: {
					if(parseInt($("[name=proffessional] ul.expirience li").length) == 0)
					ths.closest('.row').find('.expirience').html(expirience);
					ths.closest('.row').find('.addmoreexpr').html(addmoreerpr);
					$('.currentstatus').html($('[name=tmplt_curentstatus]').html());
					break;
				}
				case 1: ths.closest('.row').find('.expirience').html(''); 
						ths.closest('.row').find('.addmoreexpr').html('');
						$('.currentstatus').html('');
						break;
			}
		},
		
		register:function(ths,callback){
			//var x = $('[name=preferredlocation]').multiSelect();
			
			
			
			 
		    var proceed = true;
			$('[name=proffessional] [required=required]').filter(function() {
				if ($.trim(this.value) == "") {
					$(this).css('background-color', '#F7B9B5').css('border-color','red');
					proceed = false;
				} else {
					$(this).css('background-color', 'white').css('border-color','')
				}
            }); 
            if(proceed) {
				 var postdata={}
				 var expirience = [];
					$("[name=proffessional] ul.expirience li").each(function() {
						item = {}
						item ["companyname"] = $(this).find('[name=companyname]').val();
						item ["startyear"] = $(this).find('[name=startyear]').val();
						item ["endyear"] = $(this).find('[name=endyear]').val();
						item ["description"] = $(this).find('[name=description]').val();
						expirience.push(item);
					});
				var emails = [];
					$("[name=proffessional] div.emaillist input").each(function() {
						item = {}
						item ["emailid"] = $(this).val();
						emails.push(item);
					});
					postdata['expirience']=expirience;
					postdata['emails']=emails;
				    postdata['industry']=$("[name=proffessional] [name=industry]").val();
				    postdata['functionalarea']=$("[name=proffessional] [name=functionalarea]").val();
					postdata['expiriencestatus']=$("[name=proffessional] [name=expiriencestatus]").val();
					postdata['preferredlocation']=preferredlocation;
				    if($("[name=proffessional] [name=currentstatus]").length == 0)
					postdata['currentstatus']=0;
					else postdata['currentstatus']=$("[name=proffessional] [name=currentstatus]").val();
					postdata['_token'] = $('meta[name="csrf-token"]').attr('content');  
					$('body').removeClass('loaded');
					$.post('/auth/proffessional',postdata,function(response){   
						if(response.success)
							location.href = "/auth/signup";
						else { 
							$('body').addClass('loaded');
							$('[name=proffessional]  .responsereport li').html('<i class="fa fa-times" style="color:#F00;"></i>' + response.errors);	
							 }
					},'json');
				}
			
		 
		},
		
				
	}
	$.jproffessional.init();

