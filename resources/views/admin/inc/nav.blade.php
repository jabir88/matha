<div class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-label">MAIN NAVIGATION</li>
                <li> <a href="{{url('admin')}}"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard </span></a></li>
                @if( Auth::user()->role_id == 1)
                <li class="nav-devider"></li>
                <li> <a href="{{url('admin/user')}}"><i class="fa fa-user-circle"></i><span class="hide-menu">Users </span></a></li>
                @endif
                <li class="nav-devider"></li>
                <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Category</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{url('admin/category/add')}}">Add Category</a></li>
                        <li><a href="{{url('admin/category/view')}}">Manage Category</a></li>
                    </ul>
                </li>
                <li class="nav-devider"></li>
                <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Manufacturer</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{url('admin/manufacturer/add')}}">Add Manufacturer</a></li>
                        <li><a href="{{url('admin/manufacturer/view')}}">Manage Manufacturer</a></li>
                    </ul>
                </li>
                <li class="nav-devider"></li>
                <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Product</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{url('admin/product/add')}}">Add Product</a></li>
                        <li><a href="{{url('admin/product/manage')}}">Manage Products</a></li>
                    </ul>
                </li>
                <li class="nav-devider"></li>
                <li> <a href="#"><i class="fa fa-bandcamp"></i><span class="hide-menu">Banner </span></a></li>
                <li class="nav-devider"></li>
                <li> <a href="#"><i class="fa fa-picture-o"></i><span class="hide-menu">Gallery </span></a></li>
                @if(Auth::user()->role_id < 3)
                <li class="nav-devider"></li>
                <li> <a href="{{url('admin/contact/view')}}"><i class="fa fa-comments"></i><span class="hide-menu">Contact Message </span></a></li>
                @endif
                <li class="nav-devider"></li>
                <li> <a href="{{url('/')}}" target="_blank"><i class="fa fa-globe"></i><span class="hide-menu">Live Site</span></a></li>
                <li class="nav-devider"></li>
                <li> <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i><span class="hide-menu">Logout</span></a></li>
                <li class="nav-devider"></li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>
    </div>
</div>
