$(function(){ 
	$.documents = {
		init: function(callback) {
			$("[name=documents] input[name=profileimage]").change(function() { $.documents.profileimage(this,$(this),callback); });
			$("[name=documents] input[name=userresume]").change(function() { $.documents.userresume(this,$(this),callback); });
			$(document).on('click', '[name=documents] [name=userresume] .close', function() {  $.documents.removeresume($(this),callback);   });
			
			$("[name=documents] input").keyup(function() { $.documents.validate($(this),callback); });
			$("[name=documents] select").change(function() { $.documents.validate($(this),callback); });
			$("[name=documents] [name=btnsubmit]").click(function() { $.documents.btnsubmit($(this),callback); });
			$("[name=documents] [name=educationalcertificates] [name=addmore]").click(function() { $.documents.addmoreducerfts($(this),callback); });
			$(document).on('click', '[name=documents] [name=educationalcertificates] .cart-remove', function() {  $.documents.addedudocument($(this),callback);   });
			$(document).on('click', '[name=documents] [name=educationalcertificates] [name=choosefile]', function() {  $.documents.chooseeducocument($(this),callback);   });
			$(document).on('change', '[name=documents] [name=educationalcertificates] [type=file]', function() {  $.documents.uplodeduducocument(1,this,$(this),callback);   });
			
			$("[name=documents] [name=proffessionalcertificates] [name=addmore]").click(function() { $.documents.addmorprofsncerfts($(this),callback); });
			$(document).on('click', '[name=documents] [name=proffessionalcertificates] .cart-remove', function() {  $.documents.addprofsndocument($(this),callback);   });
			$(document).on('click', '[name=documents] [name=proffessionalcertificates] [name=choosefile]', function() { $.documents.chooseprofsndocument($(this),callback);   });
			$(document).on('change', '[name=documents] [name=proffessionalcertificates] [type=file]', function() {  $.documents.uplodeduducocument(2,this,$(this),callback);   });
			
			$(document).on('click', '[name=documents] [name=logoimage] .close', function() {  $.documents.removelogo($(this),callback);    });
			$(document).on('click', '[name=documents] [name=documents] .close', function() {  $.documents.removeimages($(this),callback);    });
			
		},
		
		
		removeresume:function(ths,callback){
			 $('body').removeClass('loaded');
			 var postdata =  { 
			  "_token" : $('meta[name="csrf-token"]').attr('content')};
			$.post('/jobseeker/removeresume',postdata,function(response){  
				$('body').addClass('loaded');  
				if(response.success){
					ths.closest('[name=userresume]').html('');
				}else{
					alert("Failed to remove logo");
				}
			},'json');
		},
		validate:function(ths,callback){
			if(ths.val()!="")ths.css('background-color', 'white').css('border-color','');
		},
		uplodeduducocument:function(type,thiss,ths,callback){ 
			if(ths.closest('tr').find('[type=text]').val().trim()==""){
				$.alert({
						title: 'Error!',
						content: "Please enter the title",
						animation: 'rotate',
						closeAnimation: 'right',
					 });
			}else {
				var proceed = true;
		        var fname = thiss.value;
		        var re = /(\.doc|\.docx|\.pdf)$/i;
			if(!re.exec(fname)){	
				proceed= false; 
				alert("Please choose only DOC/DOCX and PDF format file");	
			}
			if(proceed){
		     $('body').removeClass('loaded'); 
				 setTimeout(function(){ 
					var formData = new FormData(); 
					formData.append("document_file[]",thiss.files[0]); 
					formData.append("title",ths.closest('tr').find('[type=text]').val());
					formData.append("type",type);
					formData.append("rowtype",ths.closest('tr').attr('id'));					
					formData.append("_token",$('meta[name="csrf-token"]').attr('content')); 
					$.ajax({
						url:"/documents/educational/upload",
						cache: false,
						contentType: false,
						processData: false,
						async: false,
						data: formData,
						type: 'post',
						success: function(response) {
							$('body').addClass('loaded'); 
							if(response.success){  
							   ths.closest('tr').attr('id',response.docuemntpath[0].documentid);
							   ths.closest('tr').find('[name=choosefile] span').html(response.docuemntpath[0].documentname);
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
			}
		},
		chooseeducocument:function(ths,callback){ 
			if(ths.closest('tr').find('[name=educationaldocuments]').val().trim()==""){
				$.alert({
						title: 'Error!',
						content: "Please enter the title",
						animation: 'rotate',
						closeAnimation: 'right',
					 });
			}else ths.closest('tr').find('[type=file]').click();
		},
		
		addedudocument:function(ths,callback){
			if(ths.closest('tr').attr('id') == "new")
			 ths.closest('tr').remove();
			else {
				var id = ths.closest('tr').attr('id');
				 $('body').removeClass('loaded');
				 var postdata =  { "_token" : $('meta[name="csrf-token"]').attr('content')};
				 $.post('/documents/educational/remove/' + id ,postdata,function(response){ 
					$('body').addClass('loaded');  
					if(response.success){
						 ths.closest('tr').remove();
					}else{
						$.alert({
							title: 'Sorry!',
							content: response.errors,
							animation: 'rotate',
							closeAnimation: 'right',
						 });
					}
				},'json');
			 }
		},
		
		addmoreducerfts:function(ths,callback){ 
		
		 if(parseInt(ths.closest('table').find('tbody').find('tr').length) < 10)
			ths.closest('table').find('tbody').append(neweducert);
		else {
			$.alert({
					title: 'Sorry!',
					content: "Only 10 documents allow to uploade",
					animation: 'rotate',
					closeAnimation: 'right',
				 });
		}
		},
		
		chooseprofsndocument:function(ths,callback){
			if(ths.closest('tr').find('[name=proffessionaldocuments]').val().trim()==""){
				$.alert({
						title: 'Error!',
						content: "Please enter the title",
						animation: 'rotate',
						closeAnimation: 'right',
					 });
			}else ths.closest('tr').find('[type=file]').click();
		},
		
		addprofsndocument:function(ths,callback){
			if(ths.closest('tr').attr('id') == "new")
			 ths.closest('tr').remove();
			else {
				var id = ths.closest('tr').attr('id');
				 $('body').removeClass('loaded');
				 var postdata =  { "_token" : $('meta[name="csrf-token"]').attr('content')};
				 $.post('/documents/remove/' + id ,postdata,function(response){ 
					$('body').addClass('loaded');  
					if(response.success){
						 ths.closest('tr').remove();
					}else{
						$.alert({
							title: 'Sorry!',
							content: response.errors,
							animation: 'rotate',
							closeAnimation: 'right',
						 });
					}
				},'json');
			 }
		},
		
		addmorprofsncerfts:function(ths,callback){ 
		
		 if(parseInt(ths.closest('table').find('tbody').find('tr').length) < 10)
			ths.closest('table').find('tbody').append(newprofcert);
		else {
			$.alert({
					title: 'Sorry!',
					content: "Only 10 documents allow to uploade",
					animation: 'rotate',
					closeAnimation: 'right',
				 });
		}
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
					alert("Failed to remove logo");
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
					alert("Failed to remove logo");
				}
			},'json');
			 
		},
		btnsubmit:function(ths,callback){
			var postdata =  { "_token" : $('meta[name="csrf-token"]').attr('content')};
			
			 postdata['facebook']= $('[name=seekerdocuemnts] [name=facebook]').val();
			 postdata['twitter'] =$('[name=seekerdocuemnts] [name=twitter]').val();
			 postdata['linkedin'] = $('[name=seekerdocuemnts] [name=linkedin]').val();
			$.post('/jobseeker/complete',postdata,function(response){ 
			   if(response.success){
					location.href="/company/signup";
				}else 
				{
					alert("Please update the atleast one image");
				}
			},'json');
		},
		userresume:function(thiss,ths,callback){
			var proceed = true;
		        var fname = thiss.value;
		        var re = /(\.doc|\.docx|\.pdf)$/i;
			if(!re.exec(fname)){	
				proceed= false; 
				alert("Please choose only DOC/DOCX and PDF format file");	
			}
			if(proceed){
		     $('body').removeClass('loaded'); 
			 setTimeout(function(){ 
				var formData = new FormData();
				formData.append("document_file[]",thiss.files[0]);  
				formData.append("title","resume");
				formData.append("type",3);
				formData.append("rowtype","new");
				formData.append("_token",$('meta[name="csrf-token"]').attr('content')); 
				$.ajax({
					url:"/auth/userresume",
					cache: false,
					contentType: false,
					processData: false,
					async: false,
					data: formData,
					type: 'post',
					success: function(response) { 
						ths.val(''); 
						$('body').addClass('loaded'); 
						if(response.success){  
						  ths.closest('.form-group').find('[name=userresume]').html('<span id="close" class="close">x</span><a><i class="fa fa-file-word-o" style="font-size: 4em;"></i></a>');
						  }else {
							alert(JSON.stringify(response.errors));
						}
					}
				});
			},100);
			}
		},
		profileimage:function(thiss,ths,callback){ 
			var proceed = true;
		        var fname = thiss.value;
		        var re = /(\.jpg|\.jpeg|\.png)$/i;
			if(!re.exec(fname)){	
				proceed= false; 
				alert("Please choose only JPG/JPEG and PNG format image");	
			}
			if(proceed){
		     $('body').removeClass('loaded'); 
			 setTimeout(function(){ 
				var formData = new FormData(); 
				for(var i=0; i<thiss.files.length;i++)
				formData.append("image_file[]",thiss.files[i]);
				formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
				$.ajax({
					url:"/auth/profileimage",
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
						 	 ths.closest('.form-group').find('.profileimage').html('<img src="'+ response.imagepath +'" style="border:1px solid #ccc"><span id="close" class="close">x</span>');
							}
						  }else {
							alert(response.errors);
						}
					}
				});
			},'100');
			}
		},
	}
	$.documents.init();
})(jQuery);
