@extends('forntEnd.master')
@section('title')
Checkout
@endsection

@section('myContent')<div class="register">
		<div class="container">

<!--
			@if ($message = Session::get('success'))
			<div class="w3-panel w3-green w3-display-container">
					<span onclick="this.parentElement.style.display='none'"
					class="w3-button w3-green w3-large w3-display-topright">&times;</span>
					<p>{!! $message !!}</p>
			</div>
			<?php // Session::forget('success');?>
			@endif

			@if ($message = Session::get('error'))
			<div class="w3-panel w3-red w3-display-container">
					<span onclick="this.parentElement.style.display='none'"
					class="w3-button w3-red w3-large w3-display-topright">&times;</span>
					<p>{!! $message !!}</p>
			</div>
			<?php // Session::forget('error');?>
			@endif -->
			<div class="login-form-grids">
        <h2 class="text-left " style="margin-bottom:20px;">Register Here</h2>

				<form action="{{url('/checkout-customer-signup')}}" method="post">
					@csrf
					<input type="text" name="customer_first_name" placeholder="First Name..." required=" ">
					<input type="text" name="customer_last_name" placeholder="Last Name..." required=" ">
					<input type="email" name="customer_email" placeholder="Email Address..." required=" ">
					<input type="password" name="customer_pass" placeholder="Password" required=" ">
					<input type="text" name="customer_phone" placeholder="Phone" required=" ">
					<textarea name="customer_address" rows="8" cols="50" style="margin: 1em 0;" placeholder="Address" required=" "></textarea>


          <input type="submit" name="submit" value="Registation">
				</form>

			</div>
      <div class="login-form-grids rightme animated wow slideInUp" data-wow-delay=".5s">
				<h2 class="text-left " style="margin-bottom:20px;">Login Here</h2>

      				<form action="{{url('/checkout-customer-login')}}" method="post">
								@csrf
      					<input type="email" name="email" placeholder="Email Address" required=" ">
      					<input type="password" name="password" placeholder="Password" required=" ">
      					<div class="forgot">
      						<a href="#">Forgot Password?</a>
      					</div>
      					<input type="submit" value="Login">
      				</form>
      			</div>
		</div>
	</div>
@endsection
