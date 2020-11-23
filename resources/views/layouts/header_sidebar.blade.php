<? $info = MyHelper::company(); ?>
<nav class="navbar header-navbar pcoded-header bg-white">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                <div style="padding-top: 3px">
                    <i class="feather icon-toggle-right" style="font-size:25px;color:blue;"></i>
                </div>
            </a>
            <div class="col-xs-4">
                <a href="{{URL::to('/home')}}">
                    <img class="img-fluid ml-4" src="{{asset('images/logo.png')}}" alt="{{MyHelper::info()->company_name}}" title="{{MyHelper::info()->company_name}}" style="height:32px"/>
                </a>
            </div>


            <a class="mobile-options waves-effect waves-light">
                <i class="feather icon-more-horizontal text-custom"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li>
                    <img class="img-fluid ml-4" src="{{asset($info->logo)}}" alt="{{$info->company_name}}" title="{{$info->company_name}}" style="height:32px"/>
                    <b> {{$info->company_name}}  </b>
                </li>
                <li class="header-search">
                    <div class="main-search morphsearch-search">
                        <div class="input-group">
                                        <span class="input-group-prepend search-close">
										<i class="feather icon-x input-group-text" style="color:#777777"></i>
									</span>
                            <input type="text" class="form-control" placeholder="Enter Keyword">
                            <span class="input-group-append search-btn">
										<i class="feather icon-search input-group-text" style="color:black;"></i>
									</span>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                        <i class="full-screen feather icon-maximize text-custom"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                           {{-- <img src="{{asset('images/avatar-4.jpg')}}" style="width:45px; height: 45px; border-radius: 50%;">--}}

                            <span class="text-custom"> <i class="fa fa-user-circle-o"></i></span>
                            <i class="feather icon-chevron-down text-custom"></i>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                                <a>
                                    <i class="fa fa-user"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{URL::to('profile')}}">
                                    <i class="feather icon-user"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{URl::to('profile/password')}}">
                                    <i class="icofont icofont-ui-password"></i> Change password
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- [ Header ] end -->

<!-- [ chat user list ] start -->

<!-- [ chat user list ] end -->

<!-- [ chat message ] start -->
<div class="showChat_inner">
    <div class="media chat-inner-header">
        <a class="back_chatBox">
            <i class="feather icon-x"></i>
        </a>
    </div>


</div>
<!-- [ chat message ] end -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper ">
        <!-- [ navigation menu ] start -->
        <nav class="pcoded-navbar">
            <div class="pcoded-inner-navbar main-menu">
                <div class="" style="display: none">
                    <div class="main-menu-header">
                        <img class="img-menu-user" style="height: 80px; width: 80px; border-radius: 50%; "  src="{{asset('images/avatar-4.jpg')}}" alt="User-Profile-Image">
                        <div class="user-details">
                            <p id="more-details"><i class="feather icon-chevron-down m-l-10"></i></p>
                        </div>
                    </div>
                    <div class="main-menu-content">
                        <ul>
                            <li class="more-details">
                                <a href="user-profile.html">
                                    <i class="feather icon-user"></i>View Profile
                                </a>
                                <a href="#!">
                                    <i class="feather icon-settings"></i>Settings
                                </a>
                                <a href="">
                                    <i class="feather icon-log-out"></i>Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


                @if(auth()->user()->type==3)
                    <ul class="pcoded-item pcoded-left-item">
                        {{--pcoded-trigger--}}
                        <li class="pcoded-hasmenu active ">
                            <a href="{{URL::to('/')}}" target="_blank" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fa fa-globe"></i></span>
                                <span class="pcoded-mtext"> Visit Site</span>
                            </a>

                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="{{URL::to('/notice')}}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fa fa-folder"></i></span>
                                <span class="pcoded-mtext">Manage Notice</span>
                            </a>
                        </li>

                        <li class="pcoded-hasmenu">
                            <a href="#" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fa fa-user"></i></span>
                                <span class="pcoded-mtext">Members</span>
                            </a>
                            <ul class="pcoded-submenu">
                                {{-- subSubMenu--}}
                                <li class=" pcoded-hasmenu">
                                    <a href="{{URL::to('/member-register')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Blood Donors Members</span>
                                    </a>
                                </li>
                                <li class=" pcoded-hasmenu">
                                    <a href="{{URL::to('/approve-member')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Approve Member</span>
                                    </a>
                                </li>
                                <li class=" pcoded-hasmenu">
                                    <a href="{{URL::to('/volunteer-members')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Volunteer Members</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="#" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fa fa-user"></i></span>
                                <span class="pcoded-mtext">Eligible Blood Donors</span>
                            </a>
                            <ul class="pcoded-submenu">
                                {{-- subSubMenu--}}
                                <li class=" pcoded-hasmenu">
                                    <a href="{{URL::to('/donors-by-group/1')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">A positive(A+)</span>
                                    </a>
                                </li>
                                <li class=" pcoded-hasmenu">
                                    <a href="{{URL::to('/donors-by-group/2')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">A negative(A-)</span>
                                    </a>
                                </li>
                                <li class=" pcoded-hasmenu">
                                    <a href="{{URL::to('/donors-by-group/3')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">B positive(B+)</span>
                                    </a>
                                </li>
                                <li class=" pcoded-hasmenu">
                                    <a href="{{URL::to('/donors-by-group/4')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">B negative(B-)</span>
                                    </a>
                                </li>
                                <li class=" pcoded-hasmenu">
                                    <a href="{{URL::to('/donors-by-group/5')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">O positive(O+)</span>
                                    </a>
                                </li>
                                <li class=" pcoded-hasmenu">
                                    <a href="{{URL::to('/donors-by-group/6')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">O negative(O-)</span>
                                    </a>
                                </li>
                                <li class=" pcoded-hasmenu">
                                    <a href="{{URL::to('/donors-by-group/7')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">AB negative(AB+)</span>
                                    </a>
                                </li>
                                <li class=" pcoded-hasmenu">
                                    <a href="{{URL::to('/donors-by-group/8')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">AB negative(AB-)</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="{{URL::to('/member-blood-donation')}}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fa fa-user"></i></span>
                                <span class="pcoded-mtext">Approve Blood Donation</span>
                            </a>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="{{URL::to('/blood-receiver-list')}}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fa fa-user"></i></span>
                                <span class="pcoded-mtext">Blood Receivers List</span>
                            </a>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="{{URL::to('/show-user-message')}}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fa fa-user"></i></span>
                                <span class="pcoded-mtext">Show User Message</span>
                            </a>
                        </li>

                    </ul>
                    @elseif(auth()->user()->type==1)
                    <ul class="pcoded-item pcoded-left-item">
                        {{--pcoded-trigger--}}
                        <li class="pcoded-hasmenu active ">
                            <a href="{{URL::to('/')}}" target="_blank" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fa fa-globe"></i></span>
                                <span class="pcoded-mtext"> Visit Site</span>
                            </a>

                        </li>
                        @foreach($memus as $menu)

                            <li class="pcoded-hasmenu">

                                <a href="{{URL::to($menu->url)}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="{{$menu->icon_class}}"></i></span>
                                    <span class="pcoded-mtext">{{$menu->name}}</span>
                                </a>
                                @foreach($menu->subMenu as $smenu)
                                    <ul class="pcoded-submenu">
                                        {{-- subSubMenu--}}

                                        <li class=" pcoded-hasmenu">
                                            <a href="{{URL::to($smenu->url)}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">{{$smenu->name}}</span>
                                            </a>
                                            @foreach($smenu->subSubMenu as $subSubMenu)
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="{{URL::to($subSubMenu->url)}}" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">{{$subSubMenu->name}}</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            @endforeach
                                        </li>

                                    </ul>
                                @endforeach
                            </li>
                        @endforeach
                    </ul>
                @endif

            </div>
        </nav>

