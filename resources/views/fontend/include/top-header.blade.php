<div class="header-top">
    <div class="container">
        <div class="row">
           
            <div class="col-lg-3 col-md-4">
                <div class="header-top-left">
                    <ul class="phone-wrap">
                        <li><span>Telephone Enquiry:</span><a href="#">(+123) 123 321 345</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="header-top-right">
                    <ul class="ht-menu">
                        @if(Auth::user())
                           <li>
                            <div class="ht-setting-trigger"><span>{{Auth::user()->name}}</span></div>
                                <div class="setting ht-setting">
                                    <ul class="ht-setting-list">
                                        <li><a href="{{route('user.logout')}}">Log Out</a></li>
                                    </ul>
                                </div>
                           </li>
                        @else 
                            <li>
                                <div class="ht-setting-trigger"><span>Setting</span></div>
                                <div class="setting ht-setting">
                                    <ul class="ht-setting-list">
                                        <li><a href="{{route('login.show')}}">Login</a></li>
                                        <li><a href="{{route('reg.show')}}">Sign In</a></li>
                                    </ul>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>