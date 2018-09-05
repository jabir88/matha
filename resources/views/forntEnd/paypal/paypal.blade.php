<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-container">


    	<form class="w3-container w3-display-middle w3-card-4 w3-padding-16" method="POST" id="payment-form"
          action="{!! URL::to('paypal') !!}">
    	  <div class="w3-container w3-teal w3-padding-16">Paywith Paypal</div>
    	  {{ csrf_field() }}
    	  <h2 class="w3-text-blue">Payment Form</h2>
    	  <p>Demo PayPal form - Integrating paypal in laravel</p>
    	  <label class="w3-text-blue"><b>Enter Amount</b></label>
        <?php
         $a = str_replace(',', '', $total);
         ?>
    	  <input class="w3-input w3-border" id="amount" type="text" value="{{$a}}" name="amount"></p>
    	  <button class="w3-btn w3-blue">Pay with PayPal</button>
    	</form>
    </div>
</body>
</html>
