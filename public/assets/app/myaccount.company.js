var fetch = false;
$(function(){ 
	$.companyacount = {
		init: function(callback) {
			
		},
		globalinit: function(callback) {
			$(document).on('click', 'table[name=myjobs] li a.hidetemp', function() { $.companyacount.changestatus(0,$(this),callback); });
			$(document).on('click', '.table[name=myjobs] li a.activetemp', function() { $.companyacount.changestatus(1,$(this),callback); });
		},
		paginationmyjobs: function(page) { 
			if(fetch){
				$('body').removeClass('loaded');
				$.get('/company/myjobs/' + page,function(response){ $('body').addClass('loaded'); 
					if(response.success){
						var display = "";
						var lastdate = 0;
						for(var i = 0; i<response.data.length; i++){lastdate = new Date(response.data[i].lastdate.split("-").reverse().join("-")).getTime();
							display+='<tr id="'+ response.data[i].jobId  +'" style="animation: color 1s ease-in-out 0 1 normal both;">'+
                                           		'<td>'+ (((page - 1) * 10) + (i + 1)) +'</td>'+
                                                '<td><a href="#">'+ response.data[i].jobTitle  +'</a></td>';
												
                                               if(response.data[i].totalcount != null) display+='<td><a target="_blank" href="appliedlist/'+ response.data[i].jobId  +'/'+ response.data[i].totalcount  +'">'+ response.data[i].totalcount  +' (<span style="color:#060">'+ response.data[i].totalunseen  +' New</span>)</a></td>';
											   else 
											   display+='<td>0</td>'; 
                                              if(lastdate > today)  display+='<td><span style="color: green">'+ response.data[i].lastdate  +'</span></td>';
											  else display+='<td><span style="color: red">'+ response.data[i].lastdate  +'</span></td>';
                                                display+='<td>'+ response.data[i].createdDate  +'</td>';
                                               if(response.data[i].status == 1) display+='<td class="active"><span class="label label-success">Active</span></td>';
											   else display+='<td class="inactive"><span class="label label-default">Inactive</span></td>';
                                               display+= '<td><div class="dropdown">'+
    '<a data-target="#" href="page.html" data-toggle="dropdown" class="dropdown-toggle">Options <b class="caret"></b></a>'+
    '<ul class="dropdown-menu">'+
                '<li><a class="view" href="javascript:void(0)">View</a></li>'+
                '<li><a class="edit" href="javascript:void(0)">Edit</a></li>';
                if(response.data[i].status == 1)
				display+='<li><a class="hidetemp" href="javascript:void(0)">Hide</a></li>';
				else display+='<li><a class="activetemp" href="javascript:void(0)">Active</a></li>';
                display+= '<li class="divider"></li>'+
                '<li><a class="delete" href="javascript:void(0)">Trash</a></li></ul></div></td></tr>';
						}
						$('table[name=myjobs] tbody').html(display);
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
	$.companyacount.init();
	$.companyacount.globalinit();
})(jQuery);
