<!-- MAIN WRAPPER -->
<div class="body-wrap">
   <!-- HEADER -->
        <div id="divHeaderWrapper" class="navbar-fixed-top bounceInDown animated">
            <header class="header-standard-2">     
    <!-- MAIN NAV -->
    <div class="navbar navbar-wp navbar-arrow mega-nav" role="navigation">
        <div class="container">
            <div class="navbar-header">
              
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars icon-custom"></i>
                </button>

                <a class="navbar-brand" href="http://whilo.in" title="Whilo | Job Portal and one stop solution for your career">
                    <img src="{{ url('/images/logo.png')}}" alt="Whilo | Job Portal and one stop solution for your career">
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                   @if(!isset($_SESSION['WHILLO']['SEEKERID']))
                   
                    <li class=" mega-dropdown-fluid"><a href="{{ url('/talents') }}"><i class="fa fa-universal-access" aria-hidden="true"></i>  TALENTS</a></li>
                    @endif
					 @if(isset($_SESSION['WHILLO']['COMPAnyID']))
					 
                    <li class=" mega-dropdown-fluid"><a href="{{ url('/bonafiedtalents') }}"><i class="fa fa-universal-access" aria-hidden="true"></i>  Bonafied talent</a></li>@endif
					 @if(!isset($_SESSION['WHILLO']['COMPAnyID']))
					 
                    <li class=" mega-dropdown-fluid"><a href="{{ url('/jobs') }}"><i class="fa fa-universal-access" aria-hidden="true"></i>  Jobs</a></li>@endif
					@if(!isset($_SESSION['WHILLO']['COMPAnyID']))
					<li class=" mega-dropdown-fluid"><a href="{{ url('/companies')}}"><i class="fa fa-briefcase" aria-hidden="true"></i>  COMPANIES</a></li>@endif
					@if(!isset($_SESSION['WHILLO']['COMPAnyID']))
					<li class=" mega-dropdown-fluid"><a href="{{ url('/consultants') }}"><i class="fa fa-globe" aria-hidden="true"></i>  CONSULTANTS</a></li>@endif
			
<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book" aria-hidden="true"></i>  COURSES <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/Corporate-Leadership-Program')}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i>  Corporate Leadership Program</a></li>
                            <li><a href="{{ url('/Language-Training')}}"><i class="fa fa-language" aria-hidden="true"></i>  Language Training</a></li>
                         </ul>
</li>
<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bullhorn" aria-hidden="true"></i>  SERVICES <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/payroll')}}"><i class="fa fa-money" aria-hidden="true"></i>  Payroll</a></li>
                            <li><a href="{{ url('/trainhire')}}"><i class="fa fa-delicious" aria-hidden="true"></i>  Train, Hire &amp; Deploy</a></li>

     <li><a href="{{ url('/pricing')}}"><i class="fa fa-credit-card" aria-hidden="true"></i>  Pricing</a></li>
                            <li><a href="{{ url('/campus-drives')}}"><i class="fa fa-certificate" aria-hidden="true"></i>  Campus Drives</a></li>
         <li><a href="{{ url('/Employee-Verification')}}"><i class="fa fa-empire" aria-hidden="true"></i>  Employee Verification</a></li>
         <li><a href="{{ url('/Database-Management')}}"><i class="fa fa-database" aria-hidden="true"></i>  Database Management</a></li>
                         </ul>
</li>
                                     
		        </ul>
				<ul class="nav navbar-nav navbar-right">
                   <?php if(isset($_SESSION['WHILLO']['STATUS'])){ ?>
                   <li class=" mega-dropdown-fluid"><a href="{{ url('/myaccount')}}" ><i class="fa fa-user" aria-hidden="true" ></i>  My Account</a>

 <ul class="dropdown-menu">
                            <li><a data-toggle="modal" data-target="#changepassword"><i class="fa fa-user" aria-hidden="true"></i>  Change Password</a></li>
                          
                         </ul>
</li>
					<li class=" mega-dropdown-fluid"><a href="{{ url('/logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i>  Logout</a></li>
                   <?php } else { ?>
                   <li class=" mega-dropdown-fluid"><a href="{{ url('/auth/signin')}}"><i class="fa fa-sign-in" aria-hidden="true"></i>  LOGIN</a></li>
					<li class=" mega-dropdown-fluid"><a href="{{ url('/auth/signup')}}"><i class="fa fa-registered" aria-hidden="true"></i>  Talent's SignUp</a></li>
					<li class=" mega-dropdown-fluid"><a href="{{ url('/company/signup') }}" ><i class="fa fa-user-plus" aria-hidden="true"></i>  FOR Employers</a></li>
                    <?php } ?>
		        </ul>
               
            </div><!--/.nav-collapse -->
        </div>
    </div>
</header>        </div>
<div class="modal fade" id="changepassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
        <h4 class="modal-title" id="myModalLabel">Change your Password</h4>
      </div>
      <div class="modal-body">
       <div class="wp-block default user-form"> 
                            
                            <div class="form-body">
                                <form action="" id="frmLogin" class="sky-form">                                    
                                    <fieldset>                  
                                    
                                        <section>
                                            <div class="form-group">
                                                <label class="label">Enter Current Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
 <section>
                                            <div class="form-group">
                                                <label class="label">Enter New Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
 <section>
                                            <div class="form-group">
                                                <label class="label">Confirm New Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
                                        <section>
                                            <button class="btn btn-base btn-icon btn-icon-right btn-sign-in pull-right" type="submit">
                                                <span>Change Password</span>
                                            </button>
                                        </section>
                                    </fieldset>  
                                </form>    
                            </div>
                         
                        </div>
      </div>
    
    </div>
  </div>
</div>
        