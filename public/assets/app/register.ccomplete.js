$("#complete_btn").click(function() { 

  var postdata = {};
                                postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
                                postdata['companyid']=$('input[name="companyid"]').val();
                                postdata['emailAdd']=$('input[name="emailAdd"]').val();;
                               
                               $('body').removeClass('loaded');
                                                        $.post('/send/registrationmail',postdata,function(response){ 
                                                                   
                                                     
                                                });


            });
