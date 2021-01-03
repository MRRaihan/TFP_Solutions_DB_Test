<div class="container">
    <div class="row">
        <div class="header-top-left form-inline col-sm-6 col-xs-6 compact-hidden">
            <div class="form-group currencies-block">
                <form action="index.html" method="post" enctype="multipart/form-data" id="currency">
                    <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                        <span class="icon icon-credit "></span> USD <span class="fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu btn-xs">
                        <li> <a href="#">(€)&nbsp;Euro</a></li>
                        <li> <a href="#">(£)&nbsp;Pounds</a></li>
                        <li> <a href="#">($)&nbsp;USD</a></li>
                    </ul>
                </form>
            </div>
            <div class="form-group languages-block ">
                <form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
                    <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('assets/frontend/images/gb.png')}}" alt="English" title="English">
                        <span class="hidden-xs">English</span>
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu" >
                        <li><a href="index.php"><img class="image_flag" src="{{asset('assets/frontend/images/gb.png')}}" alt="English" title="English"> English </a></li>
                        <li> <a href="html_width_RTL/index.php"> <img class="image_flag" src="{{asset('assets/frontend/images/lb.png')}}" alt="Arabic" title="Arabic"> Arabic </a> </li>
                    </ul>
                </form>
            </div>
        </div>
        <div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-6 compact-hidden">
            <div class="tabBlock1" id="TabBlock-1">
                <ul class="top-link list-inline">
                    <li class="wishlist hidden-xs"><a href="#" id="wishlist-total" class="top-link-wishlist" title="Welcome Customer!"><span>Welcome Customer!</span></a></li>
                    @if(\Illuminate\Support\Facades\Auth::check())
                        @if(\Illuminate\Support\Facades\Auth::user()->role_id == 2 or \Illuminate\Support\Facades\Auth::user()->role_id == 3)
                        <li class="">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"> Logout</a>
                            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }}
                            </form>
                        </li>
                        @endif
                    @else
                        <li class="signin"><a href="{{route('login')}}" class="top-link-checkout" title="Sign In"><span>Sign In</span></a></li>
                    @endif
                    <li class="register"><a href="{{route('register')}}" title="Register"><span>Register</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
