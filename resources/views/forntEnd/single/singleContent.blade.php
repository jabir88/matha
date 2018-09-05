@extends('forntEnd.master')
@section('title')
 Single PAge
@endsection
@section('myContent')
<div class="products">
		<div class="container">
			<div class="agileinfo_single">
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="{{asset('/'.$allProduct_details->product_img)}}" alt=" " class="img-responsive">
				</div>
				<div class="col-md-8 agileinfo_single_right">
				<h2>{{$allProduct_details->product_name}}</h2>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="w3agile_description">
						<h4>Description :</h4>
						<p>{{$allProduct_details->product_long_des}}</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4 class="m-sing">BDT {{$allProduct_details->product_price}} </h4>
						</div>
      <form class="" action="{{url('/add-to-cart')}}" method="post">
            @csrf
            <div class="snipcart-details agileinfo_single_right_details">
              <input type="number" name="qty" value="1">
              <input type="hidden" name="pro_id" value="{{$allProduct_details->pro_id}}">
            </div>
						<div class="snipcart-details agileinfo_single_right_details">
              <input type="submit" name="submit" value="Add to cart" class="button">
	           </div>

          </form>
					</div>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
@endsection
