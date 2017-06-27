var fetch = false;
$(function(){ 
	$.joblist = {
		init: function(callback) {
			
		},
		paginationjoblist: function(page) { 
			if(fetch){
				$('body').removeClass('loaded');
				$.get('/search/joblist/' + page,function(response){ $('body').addClass('loaded'); 
					if(response.success){
						var display = "";
						for(var i = 0; i<response.data.length; i++){
							display+='<li class="featured" id="'+ response.data[i].jobId +'" style="box-shadow: 0 10px 6px -6px #777">'+
                               '<div class="listing-header bg-base">'+ response.data[i].companyName +'</div>'+
                                '<div class="listing-image">'+ 
								     
									 '<img src="companylogo.get/'+ response.data[i].logoCategory + '/' + response.data[i].dirYear + '/' + response.data[i].dirMonth + '/' + response.data[i].logoName + '/' + response.data[i].crTime + '/s.'+ response.data[i].logExt +'" class="img-responsive" style="width:100%"  alt="'+ response.data[i].companyName +'">'+
                                                                            
                                   
                                    '<a href="/jobdetails/'+ response.data[i].jobId +'/'+ response.data[i].jobTitle +'" class="btn btn-lg btn-square btn-light btn-block-bm btn-icon">See more</a>'+
                                '</div>'+
                                '<div class="cell">'+
                                    '<div class="listing-body clearfix">'+
                                        '<h3><a href="/jobdetails/'+ response.data[i].jobId +'/'+ response.data[i].jobTitle +'">'+ response.data[i].jobTitle +'</a></h3>'+
                                       '<h4>'+ response.data[i].jobTitle +'</h4>'+ 
                                    '</div>'+
                                    '<div class="listing-footer">'+
                                        '<ul class="aux-info">'+
                                            '<li><i class="fa fa-calendar"></i><strong>Created Date:</strong> '+ response.data[i].createdDate +'</li>'+
                                            '<li><i class="fa fa-inbox"></i><strong>Job Type:</strong> '+ response.data[i].employmentmodeName +'</li>'+
                                            '<li><i class="fa fa-globe"></i><strong>Location:</strong> '+ response.data[i].locationName +'</li>'+
                                        '</ul></div></div></li>';
						}
						$('ul[name=joblist]').html(display);
						$("html, body").animate({ scrollTop: 0 }, 600);
					}
				},'json');
			};
			fetch = true;
		},
		changestatus: function(status,ths,callback) {  
			var id= ths.closest('tr').attr('id'); 
			 $.confirm({
					animationSpeed: 200,
					keyboardEnabled: true,
					title: 'Confirmation!',
					content: 'Are you sure want to '+ ths.html() +' this job?',
					confirmButton: 'Proceed',
					confirmButtonClass: status == 0 ? 'btn-danger' : 'btn-success',
					confirm: function () {
						var postdata =  { "status" : status,}
						postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
						$.post('/job/changestatus/' + id ,postdata,function(response){ 
							 if(response.success){
								 ths.closest('tr').animate({ backgroundColor: status == 1 ? '#BFF6AB' :'#f3ab9a' }, 'slow').animate({ backgroundColor:'#ffffff' }, 'slow');
								 ths.closest('tr').find('td:first').next('td').next('td').next('td').next('td').next('td').html(status == 1 ? '<span class="label label-success">Active</span>' : '<span class="label label-default">Inactive</span>');
								 ths.closest('tr').find('td:last').find('ul li:first').next('li').next('li').html(status == 1 ? '<a class="hidetemp" href="javascript:void(0)">Hide</a>' : '<a class="activetemp" href="javascript:void(0)">Active</a>');
							 }else 
							 {
								 $.alert({
                                    title: 'Failed!',
                                    content: response.errors,
                                    animation: 'rotate',
                                    closeAnimation: 'right',
                                 });
							 }
						},'json');
					}
			  });
		},
	}
	$.joblist.init();
	
})(jQuery);
