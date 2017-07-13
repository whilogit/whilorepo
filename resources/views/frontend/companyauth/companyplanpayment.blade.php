<html>
<head>
<title></title>
</head>
<body  onload="document.createElement('ccavenu_form').submit.call(document.getElementById('Form'))">
<?php 
$redirect_url=url('/').'/ccavenue/responseurl';
$cancel_url=url('/').'/ccavenue/cancelurl';
?>
  <form method="post" id="ccavenu_form" name="ccavenu_form" action="http://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<input type="hidden" name="encRequest" value="{{ $encrypted_data }}">
<input type="hidden" name="access_code" value="{{ $access_code }}">
<input type="hidden" name="merchant_id" value="{{ $merchant_id }}">
<input type="hidden" name="order_id" value="{{ $orderid }}">
<input type="hidden" name="amount" value="{{$amount}}">
<input type="hidden" name="currency" value="INR">
<input type="hidden" name="redirect_url" value="{{$redirect_url}}">
<input type="hidden" name="cancel_url" value="{{$cancel_url}}">
<input type="hidden" name="language" value="EN">
<input type="submit" value="Submit">
</form>  
</body>
</html>