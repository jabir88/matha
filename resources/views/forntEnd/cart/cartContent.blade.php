@extends('forntEnd.master')
@section('title')
  Super Market || Product
@endsection

@section('myContent')
<!-- //breadcrumbs --><div class="checkout">
		<div class="container">
      <?php $contents = Cart::content(); ?>

			<h2>Your shopping cart contains: <span>{{Cart::count()}} Products</span></h2>
			<div class="checkout-right">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>SL No.</th>
							<th>Product</th>
							<th>Quality</th>
							<th>Product Name</th>

							<th>Price</th>
							<th>Total</th>
							<th>Remove</th>
						</tr>
					</thead>
					<tbody>
            @foreach($contents as $content)

            <tr class="rem1">
						<td class="invert">1</td>
						<td class="invert-image"><a href="{{url('/singlepage/'.$content->id)}}"><img src="{{asset('/'.$content->options->image)}}" alt=" " height="80" class="img-responsive"></a></td>
						<td class="invert">
               <form class="" action="{{url('/update-cart')}}" method="post">
                 @csrf
							 <div class="quantity">
								<div class="quantity-select">
                  <input type="number" class="entry value" name="qty" value="{{$content->qty}}">
                  <input type="hidden" class="entry value" name="rowId" value="{{$content->rowId}}">

                  <input type="submit" name="update" value="Update" class="button">
								</div>
							</div>

            </form>

						</td>
						<td class="invert">{{$content->name}}</td>

						<td class="invert"> {{$content->price}} TK</td>
						<td class="invert"> {{$content->total}} TK</td>
						<td class="invert">
							<div class="rem">
								<a href="{{url('delete-cart/'.$content->rowId)}}">
                <div class="close1"> </div></a>
							</div>

						</td>
					</tr>
						@endforeach
                <tr>
                  <th colspan="5"> TOTAL </th>
                  <td> {{Cart::total()}} TK</td>
                </tr>
            		<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--quantity-->
				</tbody></table>
			</div>
			<div class="checkout-left">
				<div class="checkout-left-basket">
					<h4>Continue to basket</h4>
					<ul>
            @foreach($contents as $content)

            <li>{{$content->name}} <i>-</i> <span>{{$content->total}} TK </span></li>

            @endforeach



            <li>Total <i>-</i> <span>{{Cart::total()}} TK </span></li>
            <?php
            $total = Cart::total();
             Session::put('total',$total); ?>
					</ul>
				</div>
        @if(Session::get('customer_id') == null && Session::get('shipping_id') == null )
        <div class="checkout-right-basket2">
					<a href="{{url('/checkout-signup')}}" class="margin-left: 10px; display:inline block;"> Checkout <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
				</div>
        @elseif(Session::get('customer_id') != null && Session::get('shipping_id') == null )
        <div class="checkout-right-basket2">
          <a href="{{url('/checkout/shipping')}}" class="margin-left: 10px; display:inline block;"> Shipping <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
        </div>
        @else
        <div class="checkout-right-basket2">
          <a href="{{url('/checkout/payment')}}" class="margin-left: 10px; display:inline block;"> Payment <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
        </div>

        @endif

				<div class="checkout-right-basket">
					<a href="{{url('/')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
@endsection
