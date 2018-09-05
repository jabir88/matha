@extends('forntEnd.master')
@section('title')
Checkout
@endsection

@section('myContent')<div class="register">
		<div class="container">

			@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
			@if (session('error'))
    <div class="alert alert-success">
        {{ session('error') }}
    </div>
@endif
			<div class="alert alert-info">
	       hello <b>{{Session::get('customer_name')}} </b>. You have to choose a payment method to complete your valueable offer. Thank You.
	    </div>
			<div class="login-form-grids  " style="width:100%">
        <h2 class="text-left " style="margin-bottom:20px;">Payment From</h2>
				@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
		@endif
				<form action="{{url('/payment-from')}}" class="from-group" method="post">
					@csrf
				<label style="display:block;" for="cash"><input class=" margin-left: 20px" type="radio" name="payment" id="cash" value="cash">Cash On Delivery</label>
				<label style="display:block;" for="bkash"><input class=" margin-left: 20px" type="radio" name="payment" id="bkash" value="bkash">Bkash</label>
				<label style="display:block;" for="paypal"><input class=" margin-left: 20px" type="radio" name="payment" id="paypal" value="paypal">Paypal</label>
          <input type="submit" name="submit" value="Save Shipping Information">
				</form>

			</div>

		</div>
	</div>
@endsection
