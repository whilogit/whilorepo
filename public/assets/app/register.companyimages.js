$(function(){ 
	$.companyimages = {
		init: function(callback) {

			$("[name=companyimages] input[name=logo]").change(function() { $.companyimages.logo(this,$(this),callback);  });
			$("[name=companyimages] input[name=companyimage]").change(function() { $.companyimages.companyimages(this,$(this),callback); });
			$("[name=companyimages] input").keyup(function() { $.companyimages.validate($(this),callback); });
			$("[name=companyimages] select").change(function() { $.companyimages.validate($(this),callback); });
			$("[name=companyimages] .btnsubmit").click(function() { $.companyimages.btnsubmit($(this),callback); });
			
			
			$(document).on('click', '[name=companyimages] [name=logoimage] .close', function() {  $.companyimages.removelogo($(this),callback);    });
			$(document).on('click', '[name=companyimages] [name=companyimages] .close', function() {
			var getimagid=$(this).attr('closeid');
			
 $('body').removeClass('loaded');
			 var postdata =  { 
			 "imageId" : getimagid,
			 "_token" : $('meta[name="csrf-token"]').attr('content')};
			$.post('/company/removeimages',postdata,function(response){ 
				
				$('body').addClass('loaded');  
				if(response.success){
					$('#imageappend_'+getimagid).remove();
				}
			});
			
		});
			
		},
		validate:function(ths,callback){
                    alert('validate');
			if(ths.val()!="")ths.css('background-color', 'white').css('border-color','');
		},
		
		
		
		removelogo:function(ths,callback){
			
			 $('body').removeClass('loaded');
			 var postdata =  { "_token" : $('meta[name="csrf-token"]').attr('content')};
			$.post('/company/removelogo',postdata,function(response){
					$('.loader').show(); 
				$('body').addClass('loaded');  
				if(response.success){
					ths.closest('[name=logoimage]').html('');
				}else{
					alert({
							title: 'Error!',
							content: response.errors,
							animation: 'rotate',
							closeAnimation: 'right',
						 });
				}
			},'json');
			 
		},
		
		btnsubmit:function(ths,callback){
			if($("[name=companyimages] input[name=logo]").val() == '' ||$("[name=companyimages] input[name=companyimage]").val() == ''){
                    	  $('body').addClass('loaded');
				$.alert({
								title: 'Error!',
								content: 'Please add company log and images',
								animation: 'rotate',
								closeAnimation: 'right',
							 });
			}
			else
			{
			var postdata =  { "_token" : $('meta[name="csrf-token"]').attr('content')};
			$('body').removeClass('loaded');
			$.post('/company/complete',postdata,function(response){ 
			if(response.success){
                          
				
                                 location.href = "/myaccount";
			}
			else 
			{
				$('body').addClass('loaded');
				$.alert({
								title: 'Error!',
								content: response.errors,
								animation: 'rotate',
								closeAnimation: 'right',
							 });
			}
			},'json');
		}
		},
		logo:function(thiss,ths,callback){
			$('.loader').show();
			var proceed = true;
		        var fname = thiss.value;
		     //var re = /(\.jpg|\.jpeg|\.png)$/i;
                      // var ext = fname.split('.').pop();
                  var ext=  (/\.(gif|jpg|jpeg|tiff|png)$/i).test(fname);
			if(!ext){
				$('.loader').hide();	
				proceed= false; 
				$.alert({
						title: 'Error!',
						content: "Please choose only JPG/JPEG and PNG format image",
						animation: 'rotate',
						closeAnimation: 'right',
					 });
                                         
				
			}
			if(proceed){  
		     $('body').removeClass('loaded'); 
			
			 setTimeout(function(){
				var formData = new FormData(); 
				formData.append("image_file[]",thiss.files[0]);
				formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
				
				$.ajax({
					url:"/company/logo",
					cache: false,
					contentType: false,
					processData: false,
					async: false,
					data: formData,
					type: 'post',
					success: function(response) { 
                                          
                                            
						$('body').addClass('loaded'); 
						if(response.success){  
						$('.loader').hide();
						  ths.closest('.row').find('[name=logoimage]').html('<span id="close" class="close" style="float:right;">x</span><img src="'+ response.imagepath +'" style="border:1px solid #ccc; float:left;">');
						  }else {
							$.alert({
									title: 'Error!',
									content: response.errors,
									animation: 'rotate',
									closeAnimation: 'right',
								 });
						}
					}
				});
			},100);
			}
		},
		companyimages:function(thiss,ths,callback){ 
                	 $('.imageloader').show();
			var proceed = true;
		        var fname = thiss.value;
		        var re = /(\.jpg|\.jpeg|\.png)$/i;
                      
                      
			if(!re.exec(fname)){
			$('.imageloader').hide();	
				proceed= false; 
				$.alert({
						title: 'Error!',
						content: "Please choose only JPG/JPEG and PNG format image",
						animation: 'rotate',
						closeAnimation: 'right',
					 });
				
			}
			if(proceed){
		     $('body').removeClass('loaded'); 
			 setTimeout(function(){ 
				var formData = new FormData(); 
				for(var i=0; i<thiss.files.length;i++)
				formData.append("image_file[]",thiss.files[i]);
				formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
				 
				$.ajax({
					url:"/company/companyimages",
					cache: false,
					contentType: false,
					processData: false,
					async: false,
					data: formData,
					type: 'post',
					success: function(response) { 
							$('.imageloader').hide();
						$('body').addClass('loaded'); 
						if(response.success){
							for(var i=0; i<response.imagepath.length; i++){  
						 	 ths.closest('.row').find('[name=companyimages]').append(' <div class="col-md-2" id="imageappend_'+response.imagepath[i].imageid+'"><span id="img_'+response.imagepath[i].imageid+'" class="close" style="float:right;" closeid="'+response.imagepath[i].imageid+'">x</span><input type="hidden" id="imageid_'+i+'" value="'+ response.imagepath[i].imageid+'"  ><img id="image_'+response.imagepath[i].imageid+'" src="'+ response.imagepath[i].image +'" style="border:1px solid #ccc; float:left;"></div>');
							}
						  }else {
							$.alert({
								title: 'Error!',
								content: response.errors,
								animation: 'rotate',
								closeAnimation: 'right',
							 });
						}
					}
				});
			},100);
			}
		},
		
				
	}
	$.companyimages.init();
})(jQuery);
