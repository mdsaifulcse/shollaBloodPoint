<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') | {{$primaryInfo->company_tag}} </title>
    <meta name="description" content="{{$primaryInfo->short_description}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset($primaryInfo->favicon)}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/animate.min.css')}}">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">
    <!-- Select2 CSS -->
  
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/hover-min.css')}}">

    <link rel="stylesheet" href="{{asset('public/frontend/css/nivo-slider.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{asset('public/frontend/css/themes/default/default.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/datedropper/css/datedropper.min.css')}}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/custom.css')}}">
    <!-- Modernizr Js -->
    <script src="{{asset('public/frontend/js/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/bn_IN/sdk.js#xfbml=1&version=v3.2"></script>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an
    <strong>outdated</strong> browser. Please
    <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</p>
<![endif]-->
<!-- Add your site or application content here -->
<!-- Preloader Start Here -->
<!--  <div id="preloader"></div> -->
<!-- Preloader End Here -->
<div id="wrapper">
    <div class="mobile-nav clearfix">
        <div class="logo-area mobile-nav-logo">
            <a href="{{URL::to('/')}}" class="img-responsive">
                <img src="{{asset($primaryInfo->logo)}}" alt="Sholla Blood Point" title="{{$primaryInfo->company_tag}}">
            </a>
        </div>
    </div>
    <!-- Header Area Start Here -->
    @include('frontend.include.header')

    <!-- main content Here -->
    @yield('content')

<!-- Footer Area Start Here -->
@include('frontend.include.footer')
<!-- Footer Area End Here -->

<!-- Modal Start-->
    <div class="modal fade" id="loginModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="title-default-bold mb-none">Login</div>
                </div>
                <div class="modal-body">
                    <div class="login-form">
                        {!! Form::open(['route'=>'login','method'=>'POST']) !!}
                        <label>Mobile Or Email Address <sup class="text-danger">*</sup></label>
                        {{Form::text('phone_number',$value=old('phone_number'),['placeholder'=>'Login with Mobile / Email','autocomplete'=>'off','required'=>true])}}

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                            <strong class="text-danger">{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                        @if ($errors->has('phone_number'))
                            <span class="invalid-feedback" role="alert">
                            <strong class="text-danger">{{ $errors->first('phone_number') }}</strong>
                        </span>
                        @endif

                        <label>Password <sup class="text-danger">*</sup></label>
                        {{Form::password('password',['placeholder'=>'Enter your password','required'=>true])}}

                        <span class="text-danger">{{$errors->has('password')?$errors->first('password'):''}}</span>

                        <button class="default-big-btn" type="submit" value="Login">Login</button>

                        <label class="lost-password"><a href="{{ route('password.request') }}">Lost your password ?</a></label>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End-->


</div>
<!-- jquery-->
<script src="{{asset('public/frontend/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
<!-- Bootstrap js -->
<script src="{{asset('public/frontend/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- WOW JS -->
<script src="{{asset('public/frontend/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/datedropper/js/datedropper.min.js')}}"></script>
<!-- Srollup js -->
<script type="text/javascript" src="{{asset('public/frontend/js/jquery.nivo.slider.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}" type="text/javascript"></script>
<!-- Select2 Js -->

<!-- Validator js -->
<script src="{{asset('public/frontend/js/validator.min.js')}}" type="text/javascript"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<!-- Custom Js -->
<script src="{{asset('public/frontend/js/custom.js')}}" type="text/javascript"></script>
<script src="{{asset('public/frontend/js/main.js')}}" type="text/javascript"></script>
<script src="{{asset('public/frontend/js/jquery.slicknav.min.js')}}" type="text/javascript"></script>


@yield('script')

</body>

</html>