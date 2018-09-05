<div class="navigation-agileits">
  <div class="container">
    <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
              <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
              <ul class="nav navbar-nav">
                <li class="active"><a href="{{url('/')}}" class="act">Home</a></li>
                @foreach($d as $d)
                <li class=""><a href="{{url('/category/'.$d->id)}}" class="act">{{$d->cate_name}}</a></li>
                @endforeach



                <!-- Mega Menu -->
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Groceries<b class="caret"></b></a>
                  <ul class="dropdown-menu multi-column columns-3">
                    <div class="row">
                      <div class="multi-gd-img">
                        <ul class="multi-column-dropdown">
                          <h6>All Groceries</h6>
                          <li><a href="{{url('/groceries')}}">Dals & Pulses</a></li>
                          <li><a href="{{url('/groceries')}}">Almonds</a></li>
                          <li><a href="{{url('/groceries')}}">Cashews</a></li>
                          <li><a href="{{url('/groceries')}}">Dry Fruit</a></li>
                          <li><a href="{{url('/groceries')}}"> Mukhwas </a></li>
                          <li><a href="{{url('/groceries')}}">Rice & Rice Products</a></li>
                        </ul>
                      </div>

                    </div>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Household<b class="caret"></b></a>
                  <ul class="dropdown-menu multi-column columns-3">
                    <div class="row">
                      <div class="multi-gd-img">
                        <ul class="multi-column-dropdown">
                          <h6>All Household</h6>
                          <li><a href="{{url('/household')}}">Cookware</a></li>
                          <li><a href="{{url('/household')}}">Dust Pans</a></li>
                          <li><a href="{{url('/household')}}">Scrubbers</a></li>
                          <li><a href="{{url('/household')}}">Dust Cloth</a></li>
                          <li><a href="{{url('/household')}}"> Mops </a></li>
                          <li><a href="{{url('/household')}}">Kitchenware</a></li>
                        </ul>
                      </div>


                    </div>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personal Care<b class="caret"></b></a>
                  <ul class="dropdown-menu multi-column columns-3">
                    <div class="row">
                      <div class="multi-gd-img">
                        <ul class="multi-column-dropdown">
                          <h6>Baby Care</h6>
                          <li><a href="{{url('/personalcare')}}">Baby Soap</a></li>
                          <li><a href="{{url('/personalcare')}}">Baby Care Accessories</a></li>
                          <li><a href="{{url('/personalcare')}}">Baby Oil & Shampoos</a></li>
                          <li><a href="{{url('/personalcare')}}">Baby Creams & Lotion</a></li>
                          <li><a href="{{url('/personalcare')}}"> Baby Powder</a></li>
                          <li><a href="{{url('/personalcare')}}">Diapers & Wipes</a></li>
                        </ul>
                      </div>

                    </div>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Packaged Foods<b class="caret"></b></a>
                  <ul class="dropdown-menu multi-column columns-3">
                    <div class="row">
                      <div class="multi-gd-img">
                        <ul class="multi-column-dropdown">
                          <h6>All Accessories</h6>
                          <li><a href="{{url('/packagedfoods')}}">Baby Food</a></li>
                          <li><a href="{{url('/packagedfoods')}}">Dessert Items</a></li>
                          <li><a href="{{url('/packagedfoods')}}">Biscuits</a></li>
                          <li><a href="{{url('/packagedfoods')}}">Breakfast Cereals</a></li>
                          <li><a href="{{url('/packagedfoods')}}"> Canned Food </a></li>
                          <li><a href="{{url('/packagedfoods')}}">Chocolates & Sweets</a></li>
                        </ul>
                      </div>


                    </div>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<b class="caret"></b></a>
                  <ul class="dropdown-menu multi-column columns-3">
                    <div class="row">
                      <div class="multi-gd-img">
                        <ul class="multi-column-dropdown">
                          <h6>Tea & Coeffe</h6>
                          <li><a href="{{url('/beverages')}}">Green Tea</a></li>
                          <li><a href="{{url('/beverages')}}">Ground Coffee</a></li>
                          <li><a href="{{url('/beverages')}}">Herbal Tea</a></li>
                          <li><a href="{{url('/beverages')}}">Instant Coffee</a></li>
                          <li><a href="{{url('/beverages')}}"> Tea </a></li>
                          <li><a href="{{url('/beverages')}}">Tea Bags</a></li>
                        </ul>
                      </div>

                    </div>
                  </ul>
                </li>
                <li><a href="{{url('/groceries')}}">Gourmet</a></li> -->
                <li><a href="{{url('/offers')}}">Offers</a></li>
                <li><a href="{{url('/contact-us')}}">Contact</a></li>
              </ul>
            </div>
            </nav>
    </div>
  </div>
