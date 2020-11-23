@extends('frontend.master')

@section('title')
    Registration | Blood Donor Or General Member | Sholla Blood Point
@endsection()

@section('content')
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="">
                        <div class="gradient-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <h2><i class="fa fa-tint blood"></i> Member area </h2>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="layout-switcher">
                                        <ul>
                                            <li>
                                                <a href="{{URL::to('/edit-profile')}}">
                                                        <span class="text-primary pull-right">
                                                             Edit Profile</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="category-list-layout3">
                            @if($userInfo!=null)
                                <div class="login-form">
                                    <div class="row">
                                        @if($msg=Session::get('success'))
                                            <h3 class="text-center text-success"><i class="fa fa-commenting-o" aria-hidden="true"></i> {{$msg}}</h3>
                                        @elseif($msg=Session::get('error'))
                                            <h3 class="text-center text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{$msg}}</h3>
                                        @endif
                                        <div class="col-lg-0 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 col-mb-12">
                                            <div  class="btn-group">
                                                <a href="{{URL::to('/last-blood-donation')}}" class="btn btn-primary">Last Blood Donation</a>
                                                <a href="{{URL::to('/blood-donation-details')}}" class="btn btn-success">Blood Donation Details</a>
                                                <a href="{{URL::to('/edit-profile')}}" class="btn btn-warning">Edit Profile</a>
                                                <a href="{{URL::to('/member-change-password')}}" class="btn btn-danger">Change Password</a>
                                                <h2 class="text-center">Welcome to member area </h2>
                                                <h3 class="text-center">Here you can update your last blood donation date, your profile & password</h3>
                                            </div>
                                        </div>
                                    </div> <!-- end col-->
                                </div> <!--end row-->
                                @else
                                <h3 class="well text-danger text-center"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Your account is not active & waiting for approval</h3>
                            @endif
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- Blood Request end-->
@endsection

@section('script')

    <script>
        function loadImg(input,selectedImg) {
            var target_image='#'+$('#'+selectedImg).prev().children().attr('id');

            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(target_image).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);}}
    </script>

    <script>
        $(document).on('change','#loadThana',function(){
            var id = $(this).val();
            $('#thanaUpazila').load('{{URL::to("load-thana-by-district")}}/'+id);
        });


    </script>
    @endsection