@extends('forntEnd.master')
@section('title')
  {{$product_one->cate_name}}
@endsection
@section('myContent')
<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="categories">
					<h2>Categories</h2>

					<ul class="cate">
						<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Fruits And Vegetables</a></li>
							<ul>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Cuts &amp;Name</a></li>


							</ul>
						<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Grocery &amp; Staples</a></li>
							<ul>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Dals &amp; Pulses</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Dry Fruits</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Edible Oils &amp; Ghee</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Flours &amp; Sooji</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Masalas &amp; Spices</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Organic Staples</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Rice &amp; Rice Products</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Salt, Sugar &amp; Jaggery</a></li>
							</ul>
						<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>PersonalCare</a></li>
							<ul>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Baby Care</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Cosmetics</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Deos &amp; Perfumes</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Skin Care</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sanitary Needs</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Oral Care</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Personal Hygiene</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Shaving Needs</a></li>
							</ul>
					</ul>
				</div>
			</div>
			<div class="col-md-8 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids">
						<div class="sorting">
							<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">Default sorting</option>
								<option value="null">Sort by popularity</option>
								<option value="null">Sort by average rating</option>
								<option value="null">Sort by price</option>
							</select>
						</div>
						<div class="sorting-left">
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">Item on page 9</option>
								<option value="null">Item on page 18</option>
								<option value="null">Item on page 32</option>
								<option value="null">All</option>
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="agile_top_brands_grids ">

          @foreach($product_details as $product_detail)
          <div class="col-md-4 top_brand_left">
          						<div class="hover14 column">

          							<div class="agile_top_brand_left_grid">

          								<div class="agile_top_brand_left_grid1">
          									<figure>
          										<div class="snipcart-item block">
          											<div class="snipcart-thumb">
          												<a href="{{url('/singlepage/'.$product_detail->pro_id)}}"><img title=" " alt=" " height="200" width="200" src="{{asset('/'.$product_detail->product_img)}}"></a>
          												<p>{{$product_detail->product_name}}</p>
          												<h4>BDT {{$product_detail->product_price}} </h4>
          											</div>
          											<div class="snipcart-details top_brand_home_details">
                                  <a href="{{url('/singlepage/'.$product_detail->pro_id)}}" >
                                  <input type="submit" name="submit" value="Add to cart" class="button">
                                  </a>

          											</div>
          										</div>
          									</figure>
          								</div>
          							</div>
          						</div>
          					</div>
                    @endforeach
						<div class="clearfix"> </div>
				</div>
				<nav class="numbering">
					<ul class="pagination paging">
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">«</span>
							</a>
						</li>
						<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Next">
							<span aria-hidden="true">»</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
@endsection
