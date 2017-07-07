@extends('frontend.layouts.master')

@section('content')

<body marginwidth="0" marginheight="0">
    <div id="block_error">
        <div>
         <h2> &nbspOops &nbsp&nbsp </h2>
        <p>
            Your Plan is expired! 
        </p>
        <p>
        You can choose different plans from here <a href="/company/choose_plans">Choose Plan</a>.
        If you have any questions, please contact our Technical Support department.
        </p>
        </div>
    </div>
</body>

@endsection

@section('after-scripts-end')
<script src="/assets/app/register.companyplan.js"></script>
@endsection

<style>
      html{
  }
  body{
      margin: 50;
      padding: 0;
      background: #e7ecf0;
      font-family: Arial, Helvetica, sans-serif;
  }
  *{
      margin: 0;
      padding: 0;
  }
  p{
      font-size: 12px;
      color: #373737;
      font-family: Arial, Helvetica, sans-serif;
      line-height: 18px;
  }
  p a{
      color: #218bdc;
      font-size: 12px;
      text-decoration: none;
  }
  a{
      outline: none;
  }
  .f-left{
      float:left;
  }
  .f-right{
      float:right;
  }
  .clear{
      clear: both;
      overflow: hidden;
  }
  #block_error{
      width: 845px;
      height: 384px;
      border: 1px solid #cccccc;
      margin: 72px auto 0;
      -moz-border-radius: 4px;
      -webkit-border-radius: 4px;
      border-radius: 4px;
      background: #fff url(http://www.ebpaidrev.com/systemerror/block.gif) no-repeat 0 51px;
  }
  #block_error div{
      padding: 100px 40px 0 186px;
  }
  #block_error div h2{
      color: #218bdc;
      font-size: 24px;
      display: block;
      padding: 0 0 14px 0;
      border-bottom: 1px solid #cccccc;
      margin-bottom: 12px;
      font-weight: normal;
  }
    </style>