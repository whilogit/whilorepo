@section('content')
<div class="heading">
<h4>Company Images </h4>
</div>
<div class="gallery cf">

   @foreach ($companyimages as $images)
  <div>
    <img src="/display/image/{{ $images->imageCategory }}/{{ $images->dirYear }}/{{ $images->dirMonth }}/{{ $images->logoName }}/{{ $images->crTime }}/l.{{ $images->logExt }}" />
  </div>
  @endforeach 
</div>
<div class="video">
@if(count($videourl) > 0)
<?php 
$url = "$videourl->video_url";
$videoid='';
if($url)
{
parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
  
    if (!empty($my_array_of_vars)) 
    {
        $videoid=$my_array_of_vars['v'];  
    }
    else
    {
        $videoid ='';
    }

}

?>
 <div class="col-md-12"><br/>
<h4>Company Video</h4>
 <iframe width="420" height="315"
src="https://www.youtube.com/embed/{{$videoid}}">
</iframe> 
</div>
@else
 <div class="col-md-12"><br/>
<h4>Company Video</h4>
<p class="text-justify" style="background:#ddd;padding:1%;color:black;font-weight:500;">No Youtube URL Or Pending admin approval</p>
</div>
@endif
</div>
<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font: 14px/1 'Open Sans', sans-serif;
  color: #555;
  background: #e5e5e5;
}

.gallery {
  width: 640px;
  margin: 0 auto;
  padding: 5px;
  background: #fff;
  box-shadow: 0 1px 2px rgba(0,0,0,.3);
}

.gallery > div {
  position: relative;
  float: left;
  padding: 5px;
}

.gallery > div > img {
  display: block;
  width: 200px;
  transition: .1s transform;
  transform: translateZ(0); /* hack */
}

.gallery > div:hover {
  z-index: 1;
}

.gallery > div:hover > img {
  transform: scale(1.7,1.7);
  transition: .3s transform;
}

.cf:before, .cf:after {
  display: table;
  content: "";
  line-height: 0;
}

.cf:after {
  clear: both;
}

h4 {
  margin: 40px 0;
  font-size: 30px;
  font-weight: 300;
  text-align: center;
}
.video
{
	margin: 40px ;
	margin-left:60px;
}
</style>

