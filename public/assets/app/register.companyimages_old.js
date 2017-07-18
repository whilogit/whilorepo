$(function(){ 
	$.companyimages = {
		init: function(callback) {
			$("[name=companyimages] input[name=logo]").change(function() { $.companyimages.logo(this,$(this),callback); });
			$("[name=companyimages] input[name=companyimage]").change(function() { $.companyimages.companyimages(this,$(this),callback); });
			$("[name=companyimages] input").keyup(function() { $.companyimages.validate($(this),callback); });
			$("[name=companyimages] select").change(function() { $.companyimages.validate($(this),callback); });
			$("[name=companyimages] .btnsubmit").click(function() { $.companyimages.btnsubmit($(this),callback); });
			
			
			$(document).on('click', '[name=companyimages] [name=logoimage] .close', function() {  $.companyimages.removelogo($(this),callback);    });
			$(document).on('click', '[name=companyimages] [name=companyimages] .close', function() {  $.companyimages.removeimages($(this),callback);    });
			
		},
		validate:function(ths,callback){
			if(ths.val()!="")ths.css('background-color', 'white').css('border-color','');
		},
		
		
		removeimages:function(ths,callback){
			 $('body').removeClass('loaded');
			 var postdata =  { 
			 "imageId" : ths.closest('.col-md-2').find('img').attr('id'),
			 "_token" : $('meta[name="csrf-token"]').attr('content')};
			$.post('/company/removeimages',postdata,function(response){ 
				$('body').addClass('loaded');  
				if(response.success){
					ths.closest('.col-md-2').remove();
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
		removelogo:function(ths,callback){
			 $('body').removeClass('loaded');
			 var postdata =  { "_token" : $('meta[name="csrf-token"]').attr('content')};
			$.post('/company/removelogo',postdata,function(response){ 
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
			var postdata =  { "_token" : $('meta[name="csrf-token"]').attr('content')};
			$('body').removeClass('loaded');
			$.post('/company/complete',postdata,function(response){ 
			if(response.success){
				location.href="/company/signup";
			}else 
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
		},
		logo:function(thiss,ths,callback){
			var proceed = true;
		        var fname = thiss.value;
		        var re = /(\.jpg|\.jpeg|\.png)$/i;
			if(!re.exec(fname)){	
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
						  ths.closest('.row').find('[name=logoimage]').html('<img src="'+ response.imagepath +'" style="border:1px solid #ccc"><span id="close" class="close">x</span>				');
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
			var proceed = true;
		        var fname = thiss.value;
		        var re = /(\.jpg|\.jpeg|\.png)$/i;
			if(!re.exec(fname)){	
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
						$('body').addClass('loaded'); 
						if(response.success){
							for(var i=0; i<response.imagepath.length; i++){  
						 	 ths.closest('.row').find('[name=companyimages]').append(' <div class="col-md-2"><img id="'+ response.imagepath[i].imageid+'" src="'+ response.imagepath[i].image +'" style="border:1px solid #ccc"><span id="close" class="close">x</span></div>');
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
