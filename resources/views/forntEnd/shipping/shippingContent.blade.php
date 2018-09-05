@extends('forntEnd.master')
@section('title')
Checkout
@endsection

@section('myContent')<div class="register">
		<div class="container">
			<div class="alert alert-info">
	       hello <b>{{Session::get('customer_name')}} </b>. You have to give product shipping information to complete your valueable offer. Thank You.
	    </div>
			<div class="login-form-grids  " style="width:100%">
        <h2 class="text-left " style="margin-bottom:20px;">Register Here</h2>

				<form action="{{url('/checkout-shipping-save')}}" method="post">
					@csrf
					<input type="text" value="{{$ship->customer_first_name. ' '. $ship->customer_last_name}}" name="shipping_full_name" placeholder="First Name..." required=" ">

					<input type="email" value="{{$ship->customer_email}}" name="shipping_email" placeholder="Email Address..." required=" ">
					<input type="text" value="{{$ship->customer_phone}}" name="shipping_phone" placeholder="Phone" required=" ">
					<textarea name="shipping_address" rows="8" cols="120" style="margin: 1em 0;" placeholder="Address" required=" ">
						{{$ship->customer_address}}
					</textarea>
					<select  name="shipping_city">
						<option selected>select city name</option>
						<option value="Dhaka">Dhaka</option>
						<option value="Feni">Feni</option>
						<option value="Noyakhali">Noyakhali</option>
						<option value="Pabna">Pabna</option>
					</select>
					<select  name="shipping_country">
						<option selected>select country name</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="India">India</option>
						<option value="Pakistan">Pakistan</option>
						<option value="Srilanka">Srilanka</option>
					</select>

          <input type="submit" name="submit" value="Save Shipping Information">
				</form>

			</div>

		</div>
	</div>
@endsection
