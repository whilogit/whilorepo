<div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-3">
    <div class="wp-block default user-form"> 
        <div class="form-header">
            <h2>Change your Password</h2>
        </div>
        <div class="form-body">
            <span id="loginError" style="color: red;"></span>
            <span id="loginSuccess" style="color: green;"></span>
            <form id="frmLogin" class="sky-form">      
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                <fieldset>                  
<span id='message'></span>
                    <section>
                        <div class="form-group">
                            <label class="label">Enter Current Password</label>
                            <label class="input">
                                <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                <input type="password" name="oldPassword"id="oldPassword"  value="">
                            </label>
                        </div>     
                    </section> 
                    <section>
                        <div class="form-group">
                            <label class="label">Enter New Password</label>
                            <label class="input">
                                <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                <input type="password" name="newPassword" id="newPassword" value="">
                            </label>
                        </div>     
                    </section> 

                    <section>
                        <div class="form-group">
                            <label class="label">Confirm New Password</label>
                            <label class="input">
                                <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                <input type="password" name="confirmPassword" id="confirmPassword"  value="">
                            </label>
                        </div>     
                    </section> 

                    <section>
                        <button class="btn btn-base btn-icon btn-icon-right btn-sign-in pull-right" id="pswd_change"type="button">
                            <span>Change Password</span>
                        </button>
                    </section>
                </fieldset>  
            </form>    
        </div>

    </div>
</div>
<script src="{{ url('/assets/extra/jquery_new.min.js')}}"></script>
<script type="text/javascript">
$(function(){

$('#pswd_change').click(function()
{
    var oldpassword = $('#oldPassword').val();
    var newpassword = $('#newPassword').val();
    var confirmpassword = $('#confirmPassword').val();
    if(oldpassword == '' || newpassword == '' || confirmpassword == '')
    {
        $('#loginError').html('All fields are required');
        return false;
    }
    else if(newpassword != confirmpassword)
    {
        $('#loginError').html('Password mismatch');
        return false;
    }
    else if(newpassword.length < 6)
    {
        $('#loginError').html('Password minimum length is 6');
        return false;
    }
    else
    {
      
        var postdata = {};
        postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
        postdata['newpassword']=newpassword;
         postdata['oldPassword']=oldpassword;
        $('body').removeClass('loaded');
        $.post('/company/changePassword',postdata,function(response)
        {   
            $('body').addClass('loaded');
            if(response.success)
            {
                $('#loginError').html('');
               $('#loginSuccess').html(response.msg); 
            }
            else
            {
                $('#loginSuccess').html('');
               $('#loginError').html(response.msg); 
            }
        });

    }
});
        
 


});
</script>
