$("#complete_btn").click(function() { 
  var postdata = {};
                                postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
                                postdata['companyid']=$('input[name="companyid"]').val();
                                postdata['emailAdd']=$('input[name="emailAdd"]').val();;
                               
                               $('body').removeClass('loaded');
                                                        $.post('send/registrationmail',postdata,function(response){ 

                                                        $('body').addClass('loaded');
                                                                if(response.success)
                                                                {
                                                                    $.alert('EmailSend!');
                                                                   $('#search_email_button_'+response.buttonid).remove();
                                                                   $('#statustd_'+response.buttonid).append('<span><b>Email Sent</b></span>');
                                                                   
                                                                    
                                                                }
                                                });


            });
