<div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Begin Header Bottom Menu Area -->
                <div class="hb-menu">
                    <nav>
                        <ul>
                            <li class="dropdown-holder"><a href="{{route('home.show')}}">Home</a></li>
                            <li class="megamenu-holder"><a href="shop-left-sidebar.html">Shop</a></li>
                            <li class="dropdown-holder"><a href="blog-left-sidebar.html">Blog</a></li>
                            <li class="megamenu-static-holder"><a href="index.html">Pages</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="shop-left-sidebar.html">Smartwatch</a></li>
                            <li><a href="shop-left-sidebar.html">Accessories</a></li>
                            @if(Cart::total()>0)
                                <li><a href="{{route('user.orderplace.show')}}">Order Place</a></li> 
                            @endif
                        </ul>
                    </nav>
                </div>
                <!-- Header Bottom Menu Area End Here -->
            </div>
        </div>
    </div>
</div>
<!-- Header Bottom Area End Here -->
<!-- Begin Mobile Menu Area -->
<div class="mobile-menu-area d-lg-none d-xl-none col-12">
    <div class="container"> 
        <div class="row">
            <div class="mobile-menu">
            </div>
        </div>
    </div>
</div>