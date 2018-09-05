<div class="agileits_header">
  <div class="container">
    <div class="w3l_offers">
      <p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="products.html">SHOP NOW</a></p>
    </div>
    <div class="agile-login">
      <?php $sess_name = Session::get('customer_id') ?>
      <ul>
        @if($sess_name == null)
        <li><a href="{{url('/checkout-signup')}}"> Create Account </a></li>
        <li><a href="{{url('/checkout-signup')}}">Login</a></li>
        @else
        <li><a href="#">{{Session::get('customer_name')}} </a> </li>
        <li><a href="{{url('/checkout-logout')}}">Logout</a></li>
        @endif

      </ul>
    </div>
    <div class="product_list_header " >
      <!-- <a href="{{url('/show-cart')}}" style="color:#fff;">{{Cart::total()}} TK <i  style="color:#fff; font-size:20px" class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> -->
        <form action="#" method="post" class="last">
          <a href="{{url('/show-cart')}}"  style="color:#fff;">{{Cart::total()}} TK <i  style="color:#fff; font-size:20px ; line-height:20px" class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
        </form>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
