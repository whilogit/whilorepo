$("#complete_btn").click(function() { 

var postdata = {};
postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
postdata['companyid']=$('input[name="companyid"]').val();
postdata['emailAdd']=$('input[name="emailAdd"]').val();;
                               
$('body').removeClass('loaded');
                         $.post('/send/registrationmail',postdata,function(response){ 
                               if(response)     
                               {                                
                                   $.post('/auth/ccomplete',postdata,function(response){

                                     $('body').addClass('loaded');
                                             if(response.success)
                                                     location.href = "/myaccount";
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
                               });

             });
