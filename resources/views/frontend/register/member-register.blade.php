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
                                    <h2><i class="fa fa-tint blood"></i> Get register as a proud blood member</h2>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="layout-switcher">
                                        @if(!Auth::user())
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#loginModal">
                                                        <span class="text-primary pull-right">
                                                            <i class="fa fa-sign-in" aria-hidden="true"></i> Login</span>
                                                </a>
                                            </li>
                                        </ul>
                                            @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="category-list-layout3">
                            <div class="login-form">
                                <div class="row">
                                    @if($msg=Session::get('success'))
                                    <h3 class="text-center text-success"><i class="fa fa-commenting-o" aria-hidden="true"></i> {{$msg}}</h3>
                                        @elseif($msg=Session::get('error'))
                                        <h3 class="text-center text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{$msg}}</h3>
                                        @endif
                                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 col-mb-12">
                                            {!! Form::open(['url'=>'user-member-register','method'=>'POST','class'=>'donor-register','files'=>true]) !!}

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label>Your Name <sup class="text-danger">*</sup> </label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <div class="input-group">
                                                    {{Form::text('name',$value=old('name'),['class'=>'form-control','placeholder'=>'Your name','required'=>true])}}

                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user-md"></i>
                                                    </div>
                                                </div>
                                                <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>
                                            </div>
                                        </div><!--end row-->
                                        {{--<div class="row">--}}
                                            {{--<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">--}}
                                                {{--<label>Gender <sup class="text-danger">*</sup></label>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">--}}
                                                {{--<div class="input-group" >--}}
                                                    {{--{{Form::select('gender',['Male'=>'Male','Female'=>'Female'],[],['class'=>'form-control','placeholder'=>'-- Please select Gender--','required'=>true])}}--}}

                                                    {{--<div class="input-group-addon">--}}
                                                        {{--<i class="fa fa-user" aria-hidden="true"></i>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<span class="text-danger">{{$errors->has('gender')?$errors->first('gender'):''}}</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <!--end row-->
                                        {{--<div class="row">--}}
                                            {{--<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">--}}
                                                {{--<label>Father Name <sup class="text-danger">*</sup></label>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">--}}
                                                {{--<div class="input-group">--}}
                                                    {{--{{Form::text('father_name',$value=old('father_name'),['class'=>'form-control','placeholder'=>'Your father name','required'=>true])}}--}}
                                                    {{--<div class="input-group-addon">--}}
                                                        {{--<i class="fa fa-facebook" aria-hidden="true"></i>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<span class="text-danger">{{$errors->has('father_name')?$errors->first('father_name'):''}}</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <!--end row-->

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label>District <sup class="text-danger">*</sup></label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <div class="input-group">
                                                    {{Form::select('district_id',$districts,[],['id'=>'loadThana','class'=>'form-control','placeholder'=>'-- Select District --','required'=>true])}}
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-university" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <span class="text-danger">{{$errors->has('district_id')?$errors->first('district_id'):''}}</span>
                                            </div>
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label>Thana/upazila <sup class="text-danger">*</sup></label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <div class="input-group" >
                                                    <div id="thanaUpazila">
                                                        {{Form::select('thana_upazila_id',[],[],['class'=>'form-control','placeholder'=>'--First Select District --','required'=>true])}}
                                                    </div>
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-university" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <span class="text-danger">{{$errors->has('thana_upazila_id')?$errors->first('thana_upazila_id'):''}}</span>
                                            </div>
                                        </div><!--end row-->

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label>Union</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <div class="input-group">
                                                    <div id="UnionInfo">
                                                        {{Form::select('union_id',[],[],['id'=>'loadVillage','class'=>'form-control','placeholder'=>'-- Select Thana First --','required'=>true])}}
                                                    </div>
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-home" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <span class="text-danger">{{$errors->has('union_id')?$errors->first('union_id'):''}}</span>
                                            </div>
                                        </div><!--end row-->

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label>Village</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <div class="input-group">
                                                    <div id="villageInfo">
                                                        {{Form::select('village_id',[],[],['class'=>'form-control','placeholder'=>'-- Select Union First --','required'=>true])}}
                                                    </div>
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-tree" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <span class="text-danger">{{$errors->has('village_id')?$errors->first('village_id'):''}}</span>
                                            </div>
                                        </div><!--end row-->

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label>Blood Group <sup class="text-danger">*</sup></label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <div class="input-group" >
                                                    {{Form::select('blood_group_id',$bloodGroups,[],['class'=>'form-control','placeholder'=>'-- Please Blood Group --','required'=>true])}}

                                                    <div class="input-group-addon">
                                                        <i class="fa fa-tint blood" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <span class="text-danger">{{$errors->has('blood_group_id')?$errors->first('blood_group_id'):''}}</span>
                                            </div>
                                        </div><!--end row-->

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label>Last date of blood donation <sup class="text-danger">*</sup></label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <div class="input-group">
                                                    {{Form::text('last_blood_donation',$value=old('last_blood_donation'),['class'=>'form-control datepicker','placeholder'=>'donation d-m-y','autocomplete'=>'off','required'=>true])}}
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <span class="text-danger">{{$errors->has('last_blood_donation')?$errors->first('last_blood_donation'):''}}</span>
                                            </div>
                                        </div><!--end row-->

                                        {{--<div class="row">--}}
                                            {{--<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">--}}
                                                {{--<label>Date of birth <sup class="text-danger">*</sup></label>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">--}}
                                                {{--<div class="input-group">--}}
                                                    {{--{{Form::text('birthdate',$value=old('birthdate'),['class'=>'form-control datepicker','placeholder'=>'date of birth d-m-y','autocomplete'=>'off','required'=>true])}}--}}
                                                    {{--<div class="input-group-addon">--}}
                                                        {{--<i class="fa fa-calendar" aria-hidden="true"></i>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<span class="text-danger">{{$errors->has('birthdate')?$errors->first('birthdate'):''}}</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <!--end row-->

                                        {{--<div class="row">--}}
                                            {{--<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">--}}
                                                {{--<label>Your Facebook Id</label>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">--}}
                                                {{--<div class="input-group">--}}
                                                    {{--{{Form::text('facebook_id',$value=old('facebook_id'),['class'=>'form-control','placeholder'=>'Your facebook id','required'=>false])}}--}}
                                                    {{--<div class="input-group-addon">--}}
                                                        {{--<i class="fa fa-facebook" aria-hidden="true"></i>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<span class="text-danger">{{$errors->has('facebook_id')?$errors->first('facebook_id'):''}}</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <!--end row-->

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label>Your Contact No: <sup class="text-danger">*</sup></label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <div class="input-group">
                                                    {{Form::number('phone_number',$value=old('phone_number'),['class'=>'form-control','min'=>0,'required'=>true,'placeholder'=>'Your number (you can use for login)','required'=>true])}}
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <span class="text-danger">{{$errors->has('phone_number')?$errors->first('phone_number'):''}}</span>
                                            </div>
                                        </div><!--end row-->

                                        {{--<div class="row">--}}
                                            {{--<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">--}}
                                                {{--<label>Your Email </label>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">--}}
                                                {{--<div class="input-group">--}}
                                                    {{--{{Form::email('email',$value=old('email'),['class'=>'form-control','placeholder'=>'Your email (you can use for login','required'=>false])}}--}}
                                                    {{--<div class="input-group-addon">--}}
                                                        {{--<i class="fa fa-envelope-o"></i>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<span class="text-danger">{{$errors->has('email')?$errors->first('email'):''}}</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <!--end row-->

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label>Password <sup class="text-danger">*</sup></label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <div class="input-group">
                                                    {{Form::password('password',['min'=>0,'class'=>'form-control','placeholder'=>'Please chose password (min 6 character)','required'=>true])}}
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-key" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <span class="text-danger">{{$errors->has('password')?$errors->first('password'):''}}</span>
                                            </div>
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label>Confirm Password <sup class="text-danger">*</sup></label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <div class="input-group">
                                                    {{Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Please confirm you password','required'=>true])}}

                                                    <div class="input-group-addon">
                                                        <i class="fa fa-key" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <span class="text-danger">{{$errors->has('password_confirmation')?$errors->first('password_confirmation'):''}}</span>
                                            </div>
                                        </div><!--end row-->

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label>Register As <sup class="text-danger">*</sup></label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <div class="input-group" >
                                                    {{Form::select('member_type',['1'=>'Blood Donor','2'=>'I want to be a voluntary member'],[],['id'=>'memberType','class'=>'form-control','required'=>true])}}

                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <span class="text-danger">{{$errors->has('member_type')?$errors->first('member_type'):''}}</span>
                                            </div>
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label title="How many time you have donated blood">Number of blood donation</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <div class="input-group" >
                                                    {{Form::text('number_of_donation',$value=old('number_of_donation'),['class'=>'form-control','placeholder'=>'How many time you have donated blood','required'=>false])}}

                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <span class="text-danger">{{$errors->has('number_of_donation')?$errors->first('number_of_donation'):''}}</span>
                                            </div>
                                        </div><!--end row-->

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label>Please give answer <sup class="text-danger"> : </sup>
                                                    <strong class="text-danger">
                                                        <span id="firstNumber">{{$firstNumber}}</span>
                                                        <span id="secondNumber">+ {{$secondNumber}} = </span>
                                                    </strong>
                                                </label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <input type="number" name="answer" min="0" required="required">
                                                <input type="hidden" name="first_number" min="0" value="{{$firstNumber}}" required="required">
                                                <input type="hidden" name="second_number" min="0" value="{{$secondNumber}}" required="required">
                                                <span class="text-danger">{{$errors->has('answer')?$errors->first('answer'):''}}</span>
                                                @if($msg=Session::get('msg'))
                                                    {{$msg}}
                                                    @endif
                                            </div>
                                        </div><!--end row-->
                                        <div class="row">
                                            {{--<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">--}}
                                                {{--<label>Choose you photo (max 3000kb / 3MB )<sup class="text-danger"></sup></label>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-lg-3 col-md-3 col-sm-7 col-xs-12">--}}
                                                {{--<span class="text-danger">{{$errors->has('photo')?$errors->first('photo'):''}}</span>--}}
                                                {{--<label class="slide_upload"  for="memgerPhoto" >--}}
                                                    {{--<img id="selectedImg" src="{{asset('images/default/photo.png')}}" style="border: 2px dashed #448aff;width: 120px;height: 120px" title="Member Photo">--}}
                                                {{--</label>--}}
                                                {{--<input type="file" id="memgerPhoto" name="photo" onchange="loadImg(this,this.id)" class="form-control"  accept="image/*" style="display: none">--}}
                                            {{--</div>--}}

                                            <button class="default-big-btn pull-right" type="submit" value="Login"><i class="fa fa-book"></i> Save</button>

                                        </div><!--end row-->


                                        {!! Form::close() !!}
                                    </div>
                                </div> <!-- end col-->
                            </div> <!--end row-->
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

        $(document).on('change','#loadUnion',function(){ // load union ------------
            var id = $(this).val()

            $('#UnionInfo').load('{{URL::to("load-union-by-thana")}}/'+id); // thana id
        });

        $(document).on('change','#loadVillage',function(){ // load village ------------
            var id = $(this).val()

            $('#villageInfo').load('{{URL::to("load-village-by-union")}}/'+id); // union id
        });


    </script>
    @endsection