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
                                    <h2><i class="fa fa-tint blood"></i> Save you Last Blood Donation Info </h2>
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
                            @if($memberStatus!=null)
                                <div class="login-form">
                                    <div class="row">
                                        @if($msg=Session::get('success'))
                                            <h3 class="text-center text-success"><i class="fa fa-commenting-o" aria-hidden="true"></i> {{$msg}}</h3>
                                        @elseif($msg=Session::get('error'))
                                            <h3 class="text-center text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{$msg}}</h3>
                                        @endif
                                        <h3 class="well text-center text-success">Your total number of blood Donation : <strong class=" badge">{{$numberOfDonation}}</strong></h3><br>
                                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 col-mb-12">
                                            {!! Form::open(['url'=>'last-blood-donation','method'=>'POST','class'=>'donor-register','files'=>true]) !!}

                                            <div class="row">
                                                <h4 class="text-center"> Enter your last blood donation details</h4>
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Last date of blood donation <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group">
                                                        {{Form::text('last_blood_donation',$value=old('/last_blood_donation'),['autocomplete'=>'off','class'=>'form-control datepicker','required'=>true])}}
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger">{{$errors->has('last_blood_donation')?$errors->first('last_blood_donation'):''}}</span>
                                                </div>
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Patient name <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group">
                                                        {{Form::text('patient_name',$value=old('patient_name'),['class'=>'form-control','placeholder'=>'Patient name','required'=>true])}}
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger">{{$errors->has('patient_name')?$errors->first('patient_name'):''}}</span>
                                                </div>
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Patient Mobile <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group">
                                                        {{Form::number('patient_mobile',$value=old('patient_mobile'),['min'=>0,'class'=>'form-control','placeholder'=>'Patient mobile number','required'=>true])}}
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger">{{$errors->has('patient_mobile')?$errors->first('patient_mobile'):''}}</span>
                                                </div>
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Patient diseases <sup class="text-danger">*</sup> </label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group">
                                                        {{Form::text('patient_diseases',$value=old('patient_diseases'),['class'=>'form-control','placeholder'=>'Patient diseases','required'=>true])}}

                                                        <div class="input-group-addon">
                                                            <i class="fa fa-deaf" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger">{{$errors->has('patient_diseases')?$errors->first('patient_diseases'):''}}</span>
                                                </div>
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label> Hospital </label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group">
                                                        {{Form::text('hospital',$value=old('hospital'),['class'=>'form-control','placeholder'=>'By which hospital you have been given blood ','required'=>false])}}

                                                        <div class="input-group-addon">
                                                            <i class="fa fa-hospital-o" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger">{{$errors->has('hospital')?$errors->first('hospital'):''}}</span>
                                                </div>
                                            </div><!--end row-->


                                            <div class="row">

                                                <button class="default-big-btn pull-right" type="submit" value="Login"><i class="fa fa-book"></i> Save</button>

                                            </div><!--end row-->


                                            {!! Form::close() !!}
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