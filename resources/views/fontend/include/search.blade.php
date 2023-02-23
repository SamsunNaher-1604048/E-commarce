<div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo pb-sm-30 pb-xs-30">
                    <a href="index.html">
                        <img src="{{asset('fontend/image/menu/logo/1.jpg')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
           
                <form action="{{route('product.search')}}" class="hm-searchbox" method="post">
                    @csrf
                    <input type="text" name="search" placeholder="Enter your Product Name..." required>
                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
               
                <div class="header-middle-right">
                    <ul class="hm-menu">
                        <a class="addtocart" href="{{route('add-to-cart.show')}}">
                            <li class="hm-minicart">
                                Show Cart ({{Cart::content()->count()}}) 
                            </li>
                         </a>
                        <!-- Header Mini Cart Area End Here -->
                    </ul>
                </div>
                <!-- Header Middle Right Area End Here -->
            </div>
            <!-- Header Middle Right Area End Here -->
        </div>
    </div>
</div>