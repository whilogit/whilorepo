var fetch = false;
$(function(){ 
	$.joblist = {
		init: function(callback) {
			
		},
		paginationjoblist: function(page) { 
			if(fetch){
				$('body').removeClass('loaded');
				$.get('/search/bonafiedtalentlist/' + page,function(response){ $('body').addClass('loaded'); 
					if(response.success){
                                           
						var display = "";
                                                var incr = 0; 
                                                 var classe = 'active';
						for(var i = 0; i<response.data.length; i++){
                                                    
                                                   // alert(response.data[i].firstName);
                                                    //alert(incr);
                                                    incr++;
                                                  
                                                    if(incr==1)
                                                    {
                                                   
                                                        display+='<div class="item ' + classe + '"><div class="row">';
                                                    }
                                                   	
							display+='<div class="col-md-2">'+
                                    
'<div class="wp-block inverse bordergrey">'+
                                      '<a target="_blank" href="/talentdetails/'+ response.data[i].seekerId + '/' + response.data[i].firstName + '">'+
 '<div class="figure">';
if(response.data[i].imageCategory != null)
{
display+='<img style="width:100%;height:150px" src="'+url+'/display/image/'+ response.data[i].imageCategory + '/' + response.data[i].dirYear + '/' + response.data[i].dirMonth + '/' + response.data[i].imageName + '/' + response.data[i].crTime + '/s.'+ response.data[i].imgExt +'" class="img-responsive" style="width:100%">';
        }
        else
    {
       display+='<img style="width:100%;height:150px" src="http://www.oldpotterybarn.co.uk/wp-content/uploads/2015/06/default-medium.png"  class="img-responsive">';
    }
display+='</div>'+
                                     
'<h2>'+ response.data[i].firstName +' '+  response.data[i].lastName + '<small>Location:'+  response.data[i].locationName + ' </small>'+
'</h2>'+
'<p>'+  response.data[i].experienceName + '</p>'+
'</a>'+
'</div></div>';
if(incr==6)
                                                    {
                                                       display+='</div><div>';
                                                    }
							
                                                        if(incr==6)
                                                    {
                                                       var incr=0;
                                                       var classe="";
                                                    }
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
						$.post('/talent/changestatus/' + id ,postdata,function(response){ 
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
