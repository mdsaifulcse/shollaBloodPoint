<header>
    <div id="header-three" class="header-style1 header-fixed">
        <div class="main-menu-area bg-primary" id="sticker">
            <div class="container-fluid">
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-lg-1 col-md-1 col-sm-3">
                        <div class="logo-area">
                            <a href="{{URL::to('/')}}" class="img-responsive img-circle">
                                <img src="{{asset($primaryInfo->logo)}}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-11 col-md-11 col-sm-6 possition-static">
                        <div class="cp-main-menu">
                            <nav>
                                <ul class="mobile-menu">
                                    @foreach($menus as $menu)
                                        <li><a href="{{URL::to($menu->url)}}">{{$menu->name}}@if(count($menu->frontendSubMenu)>0) <span class="caret"></span>@endif</a>
                                            @if(count($menu->frontendSubMenu)>0)
                                                <ul class="cp-dropdown-menu">

                                                    @foreach($menu->frontendSubMenu as $subMenu)
                                                        <li>
                                                            <a href="{{URL::to($subMenu->url)}}"><i class="fa fa-tint blood" aria-hidden="true"></i> {{$subMenu->name}} </a>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 text-right">
                        @if(Auth::user())
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->name}}
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                    <li ><a href="{{URL::to('/member-area')}}"><i class="fa fa-tint text-danger"></i> Member area</a></li>
                                    <li ><a href="{{URL::to('/last-blood-donation')}}"><i class="fa fa-tint text-danger"></i> Last Blood donation</a></li>

                                    <li ><a href="{{URL::to('/member-change-password')}}"><i class="fa fa-key"></i> Change Password</a></li>

                                    <li ><a href="{{URL::to('/blood-donation-details')}}"><i class="fa fa-tint text-danger"></i> Blood Donation Details</a></li>
                                    <li ><a href="{{URL::to('/edit-profile')}}"><i class="fa fa-edit"></i> Edit Profile</a></li>

                                    <li  class="divider"></li>
                                    <li ><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i class="fa fa-log-out"></i> logout <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </ul>
                            </div>
                        @else

                            <a href="#" class="cp-default-btn" data-toggle="modal" data-target="#loginModal"
                            >Login</a>
                            <a href="{{URL::to('/member-register.html')}}" class="cp-default-btn" title="Register as Blood donors Or General Member">Registration </a>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- Header Area End Here -->
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-xs-8 col-sm-offset-3 col-xs-offset-2 hidden-md hidden-lg">
            @if(Auth::user() && Auth::user()->type===2)
                <div class="dropdown mobile-login">
                    <button class="btn btn-success dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->name}}
                         <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li ><a href="{{URL::to('/edit-profile')}}"><i class="fa fa-edit"></i> Edit Profile</a></li>
                        <li ><a href="{{URL::to('/last-blood-donation')}}"><i class="fa fa-tint text-danger"></i> last Blood donation</a></li>
                        <li ><a href="{{URL::to('/member-change-password')}}"><i class="fa fa-key"></i> Change Password</a></li>
                        <li ><a href="{{URL::to('/blood-donation-details')}}"><i class="fa fa-tint text-danger"></i> Blood Donation Details</a></li>
                        <li  class="divider"></li>
                        <li ><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i class="fa fa-log-out"></i> logout <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </div>
            @else

                <div class="mobile-login">
                    <a href="#" class="cp-default-btn" data-toggle="modal" data-target="#loginModal"
                    >Login</a>
                    <a href="{{URL::to('/member-register.html')}}" class="cp-default-btn" title="Register as Blood donors Or General Member">Registration</a>
                </div>
            @endif
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <img src="{{asset('images/banner/Sholl Blood Point.png')}}" class="img-responsive img-thumbnail center-block banner-img" title="Sholla blood Point" alt="sholla Blood point ">
        </div>
    </div>
</div>

<div class="container">
    <div> <!-- for marquee notice ===========  -->
        <div class="row marquee">
            <div class="col-md-1 col-sm-2 col-xs-2 my-notic">
                <h5>News</h5>
            </div>
            <div class="col-md-11 col-sm-8 col-xs-8">
                <marquee onmouseover="stop();" onmouseout="start();">
                    <h5>
                        @if(count($notices)>0)
                            @foreach($notices as $notice)
                                <a class="blood" href="{{URL::to('/show-notice/'.$notice->id)}}" target="blank"><span>»</span> {{$notice->title}}</a>
                            @endforeach
                            @else
                            <span class="text-danger">No Notice available here</span>
                        @endif
                    </h5>
                </marquee>
            </div>
        </div>
    </div>
</div>
