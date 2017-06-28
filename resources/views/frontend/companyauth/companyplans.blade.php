@extends('frontend.layouts.master')

@section('content')

<!-- MAIN WRAPPER -->
<div class="body-wrap">
   

        <!-- Optional header components (ex: slider) -->
  <!-- MAIN CONTENT -->
        <div class="pg-opt" style="margin-top:5%;">
        <div class="container">
          
        </div>
    </div>



   <section class="slice bg-base"  name="choose_plan" style="background: #242738;">
           <div class="wp-section">
            <div class="container">
                <div class="row"><h4 class="col-md-12 text-center">Pricing</h4>
                    <div class="col-md-12">
<div class="col-md-8 col-md-offset-2 col-sm-6 col-xs-12">

<table class="table  table-responsive"><tbody>
<tr><th>&nbsp;</th><th>Express Plan</th><th>Enterprise Plan</th><th>Exclusive Plan</th></tr>
<tr><th>CV Access</th><td>350 (50 Profiles per Day)</td><td>975 (65 Profiles per Day)</td><td>2400 (80 Profiles per Day)</td></tr>
<tr><th>Job Post Limit</th><td>2</td><td>5</td><td>15</td></tr>
<tr><th>Duration</th><td>7</td><td>15</td><td>30</td></tr>
<tr><th>Search Criterion</th><td>Location Based</td><td>Location Based</td><td>Location Based</td></tr>
<tr><th>Emails</th><td>FREE</td><td>FREE</td><td>FREE</td></tr>
<tr><th>Price(Rs.)</th><td>2000</td><td>4200</td><td>8500</td></tr> <tr><th>&nbsp;</th><td>
                    <button class="btn btn-lg btnsubmit" id="expressbtn" value="1" type="button">


    <table class="table  table-responsive"><tbody>     
  
              @foreach ($complans as $complan)
                  <tr>
                    <th>&nbsp;
               
          
                <th>{{  $complan->planname }}</th>
               
            </tr>
              
              <tr><th>{{ $complan->detail_name }} </th><td>{{ $complan->detail_value }}</td></tr>
              @endforeach 
              
            
            <tr>
                <th>Job Post Limit</th>
                <td>2</td>
                <td>5</td>
                <td>15</td>
            </tr>
            <tr>
                <th>Duration</th>
                <td>7</td>
                <td>15</td>
                <td>30</td>
            </tr>
            <tr><th>Search Criterion</th><td>Location Based</td><td>Location Based</td><td>Location Based</td></tr>
            <tr><th>Emails</th><td>FREE</td><td>FREE</td><td>FREE</td></tr>
            <tr><th>Price(Rs.)</th><td>2000</td><td>4200</td><td>8500</td></tr>
            <tr><th>&nbsp;</th><td>
                    <button class="btn btn-lg btnsubmit" id="expressbtn" type="button">

                        Subscribe Now  </button>
                </td><td>  <button class="btn btn-lg btnsubmit"  id="enterprisebtn" value="2" type="button">
                        Subscribe Now  </button></td> <td><button id="exclusivebtn" value="3" class="btn btn-lg btnsubmit" type="button">
                        Subscribe Now  </button></td></tr>
<tbody>
</table>
    <form name="expressPlan" id="expressPlan" method="post" action="" >
        <input type="hidden" name="cvAccess" id="cvAccess" value="350 (50 Profiles per Day)"/>
        <input type="hidden"  name="jobPosts" id="jobPosts" value="2"/>
        <input type="hidden"  name="duration" id="duration" value="7"/>
        <input type="hidden" name="searchC" id="searchC" value="Location Based"/>
        <input type="hidden" name="emails" id="emails" value="Free"/>
        <input type="hidden"  name="price" id="price" value="2000"/>
    </form>
    <form name="enterprisePlan" id="enterprisePlan" method="post" action="" >
        <input type="hidden"  name="cvAccess" id="cvAccess1" value="975 (65 Profiles per Day)"/>
        <input type="hidden"  name="jobPosts" id="jobPosts1" value="5"/>
        <input type="hidden"  name="duration" id="duration1" value="15"/>
        <input type="hidden"  name="searchC" id="searchC1" value="Location Based"/>
        <input type="hidden"  name="emails" id="emails1" value="Free"/>
        <input type="hidden"  name="price" id="price1" value="4200"/>
    </form>
    <form name="exclusivePlan" id="exclusivePlan" method="post" action="" >
        <input type="hidden"  name="cvAccess" id="cvAccess2" value="2400 (80 Profiles per Day)"/>
        <input type="hidden"  name="jobPosts" id="jobPosts2" value="15"/>
        <input type="hidden"  name="duration" id="duration2" value="30"/>
        <input type="hidden"  name="searchC" id="searchC2" value="Location Based"/>
        <input type="hidden"  name="emails" id="emails2" value="Free"/>
        <input type="hidden"  name="price" id="price2" value="8500"/>
    </form>
        </div>
                    </div>
                  

                </div>
            </div>
        </div>
    </section>


</div>


<style>
body{font-family:Tw Cen MT !important;}
ul li,p{    font-size: 16px;
    line-height: 21px;}
th, td {
    border: 1px solid #b2aeae;
    font-weight: 600;
}
</style>
@endsection

@section('after-scripts-end')
<script src="/assets/app/register.companyplan.js"></script>
@endsection
