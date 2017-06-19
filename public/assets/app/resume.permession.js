$(function(){  
	$.permission = {
		init: function(callback) {
			$("[name=requesttopermission]").click(function() { $.permission.resume($(this),callback); });
			$("[name=downloaderesume]").click(function() { $.permission.downloaderesume($(this),callback); });
			$(document).on('click', '[name=removefavarite]', function(){ $.permission.removefavarite($(this),callback); });
			$(document).on('click', '[name=addtofavarite]', function(){ $.permission.addtofavarite($(this),callback); });
		},
		resume: function(ths,callback) { 
			 $.confirm({
					animationSpeed: 200,
					keyboardEnabled: true,
					title: 'Confirmation!',
					content: 'Charges may apply for this future.. Are you sure to continue this',
					confirmButton: 'Proceed',
					confirmButtonClass: status == 0 ? 'btn-danger' : 'btn-success',
					confirm: function () {
							var postdata={};
							postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
							$('body').removeClass('loaded');
							$.post('/resume/permission/' + seekerid,postdata,function(response){   
								if(response.success){
									location.reload();
								}else{
									
								}
					},'json');
				}
			 });
		},
		
		downloaderesume: function(ths,callback) { 
			$.get('/resume/downloade/' + seekerid,postdata,function(response){    
							location.href=response.url;
			},'json');
		},
		addtofavarite: function(ths,callback) { 
			 $.confirm({
					animationSpeed: 200,
					keyboardEnabled: true,
					title: 'Confirmation!',
					content: 'Are you sure to add this to your favorite',
					confirmButton: 'Proceed',
					confirmButtonClass: status == 0 ? 'btn-danger' : 'btn-success',
					confirm: function () {
							var postdata={};
							postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
							$('body').removeClass('loaded');
							$.post('/resume/addfavorite/' + seekerid,postdata,function(response){    
							$('body').addClass('loaded');
								if(response.success){
									ths.closest('.col-md-6').html('<div class=" btn small-btn link-button highlight-button-magenta col-md-12" name="removefavarite"><h2>Remove favorite <i class="fa fa-long-arrow-right text-white" aria-hidden="true"></i></h2></div>')
								}else{
									
								}
					},'json');
				}
			 });
		},
		removefavarite: function(ths,callback) { 
			 $.confirm({
					animationSpeed: 200,
					keyboardEnabled: true,
					title: 'Confirmation!',
					content: 'Are you sure to remove from favorite list',
					confirmButton: 'Proceed',
					confirmButtonClass: status == 0 ? 'btn-danger' : 'btn-success',
					confirm: function () {
							var postdata={};
							postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
							$('body').removeClass('loaded');
							$.post('/resume/removefavorite/' + seekerid,postdata,function(response){    
							$('body').addClass('loaded');
								if(response.success){
									ths.closest('.col-md-6').html('<div class=" btn small-btn link-button highlight-button-magenta col-md-12" name="addtofavarite"><h2> Add to favorite <i class="fa fa-long-arrow-right text-white" aria-hidden="true"></i></h2></div>')
								}else{
									
								}
					},'json');
				}
			 });
		},
		
	}
	$.permission.init();
})(jQuery);