@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="#">Edit Member</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row ">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header card-info">
                    <i class="fa fa-edit"></i> Edit Member Info
                    <div class="card-btn pull-right">
                        <a href="{{URL::to('approve-member')}}" title="View All Waiting member" class="btn btn-warning btn-sm" > <i class="fa fa-list"></i> Waiting Members </a>
                        <a href="{{URL::to('member-register')}}" title="View All Notices" class="btn btn-primary btn-sm" > <i class="fa fa-list"></i> All Members</a>
                    </div>
                </div>

                {!! Form::open(array('route' =>['member-register.update',$member->id],'method'=>'PUT','class'=>'form-horizontals','files'=>true)) !!}
                <div class="card-body">

                    <div class="form-group row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label> Name : <sup class="text-danger">*</sup></label>
                            <div class="">
                                {{Form::text('name',$value=$member->name,['class'=>'form-control','placeholder'=>'Member Name','required'=>true])}}
                                <span class="text-danger">
                                    {{$errors->has('name')?$errors->first('name'):''}}
                                    </span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Gender : <sup class="text-danger">*</sup></label>
                            <div class="">
                                {{Form::select('gender',['Male'=>'Male','Female'=>'Female'],$member->gender,['class'=>'form-control','placeholder'=>'-- Please select Gender--','required'=>true])}}
                            </div>
                            <span class="text-danger">
                                    {{$errors->has('gender')?$errors->first('gender'):''}}
                                </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Father Name : <sup class="text-danger">*</sup></label>
                            <div class="">
                                {{Form::text('father_name',$value=$member->father_name,['class'=>'form-control','placeholder'=>'Father Name','required'=>true])}}
                            </div>
                            <span class="text-danger">
                                    {{$errors->has('father_name')?$errors->first('father_name'):''}}
                                </span>
                        </div>
                    </div><!--end row-->
                    <div class="form-group row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Phone Number : <sup class="text-danger">*</sup></label>
                            <div class="">
                                {{Form::number('phone_number',$value=$member->phone_number,['min'=>0,'class'=>'form-control','placeholder'=>'Member Phone Number','required'=>true])}}
                                <span class="text-danger">
                                    {{$errors->has('phone_number')?$errors->first('phone_number'):''}}
                                    </span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Email : <sup class="text-danger">*</sup></label>
                                {{Form::text('email',$value=$member->email,['class'=>'form-control','placeholder'=>'Member Email','required'=>true])}}
                                <span class="text-danger">
                                    {{$errors->has('email')?$errors->first('email'):''}}
                                </span>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>District : <sup class="text-danger">*</sup></label>
                                {{Form::select('district_id',$districts,$member->district_id,['id'=>'loadThana','class'=>'form-control','placeholder'=>'-- Select District --','required'=>true])}}
                                <span class="text-danger">
                                    {{$errors->has('district_id')?$errors->first('district_id'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Thana /Upazila : <sup class="text-danger">*</sup></label>
                                <div id="thanaUpazila">
                                    {{Form::select('thana_upazila_id',$thanaUpazila,$member->thana_upazila_id,['id'=>'loadUnion','class'=>'form-control','required'=>true])}}
                                </div>
                                <span class="text-danger">
                                    {{$errors->has('thana_upazila_id')?$errors->first('thana_upazila_id'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Union : <sup class="text-danger">*</sup></label>
                                <div id="UnionInfo">
                                    {{Form::select('union_id',$unions,$member->union_id,['id'=>'loadVillage','class'=>'form-control','placeholder'=>'-- Select Thana First --','required'=>true])}}
                                </div>
                                <span class="text-danger">
                                    {{$errors->has('union_id')?$errors->first('union_id'):''}}
                                </span>
                            </div>
                        </div>
                    </div> <!--end row-->
                    <div class="form-group row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Village : <sup class="text-danger">*</sup></label>
                                <div id="villageInfo">
                                    {{Form::select('village_id',$villages,$member->village_id,['class'=>'form-control','placeholder'=>'-- Select Union First --','required'=>true])}}
                                </div>
                                <span class="text-danger">
                                    {{$errors->has('village_id')?$errors->first('village_id'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Facebook ID : <sup class="text-danger">*</sup></label>
                                {{Form::text('facebook_id',$value=$member->facebook_id,['class'=>'form-control','placeholder'=>'Facebook ID (Optional)','required'=>false])}}
                                <span class="text-danger">
                                    {{$errors->has('facebook_id')?$errors->first('facebook_id'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Member Type : <sup class="text-danger">*</sup></label>
                                {{Form::select('member_type',[''=>'--Select Type--','1'=>'Donate blood','2'=>'A voluntary member'],$member->member_type,['class'=>'form-control','required'=>true])}}
                                <span class="text-danger">
                                    {{$errors->has('member_type')?$errors->first('member_type'):''}}
                                </span>
                            </div>
                        </div>
                    </div> <!-- end row -->
                    <div class="form-group row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Blood Group : <sup class="text-danger">*</sup></label>
                            {{Form::select('blood_group_id',$bloodGroups,$member->blood_group_id,['class'=>'form-control','placeholder'=>'-- Select One--','required'=>true])}}
                            <span class="text-danger">
                                {{$errors->has('blood_group_id')?$errors->first('blood_group_id'):''}}
                            </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label> Last Date of Blood Donation : <sup class="text-danger">*</sup></label>
                            {{Form::text('last_blood_donation',$value=date('d-m-Y',strtotime($member->last_blood_donation)),['class'=>'form-control datepicker','required'=>true])}}
                            <span class="text-danger">
                                {{$errors->has('last_blood_donation')?$errors->first('last_blood_donation'):''}}
                            </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label> Date of Birth : <sup class="text-danger">*</sup></label>
                            {{Form::text('birthdate',$value=date('d-m-Y',strtotime($member->birthdate)),['class'=>'form-control datepicker','required'=>true])}}
                            <span class="text-danger">
                                {{$errors->has('birthdate')?$errors->first('birthdate'):''}}
                            </span>
                        </div>
                    </div> <!--end row-->

                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Number of blood donation :</label>
                                    {{Form::text('number_of_donation',$value=$numberOfDonation,['class'=>'form-control','placeholder'=>'How many time member donate blood','required'=>true])}}
                                    <span class="text-danger">
                                {{$errors->has('number_of_donation')?$errors->first('number_of_donation'):''}}
                            </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Member Status : <sup class="text-danger">*</sup></label>
                                    {{Form::select('status',['1'=>'Active','0'=>'Inactive'],$member->status,['class'=>'form-control','required'=>true])}}
                                    <input type="hidden" name="user_id" value="{{$member->user_id}}">
                                    <span class="text-danger">
                                {{$errors->has('donation_status')?$errors->first('donation_status'):''}}
                            </span>
                                </div>
                            </div> <!--end row-->
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label>Member Photo</label>
                            <div class="">
                                <span class="text-danger">{{$errors->has('photo')?$errors->first('photo'):''}}</span>
                                @if(!empty($member->photo))
                                <label class="slide_upload"  for="pageImage" style="border: 2px dashed #448aff">
                                    <img id="selectedImg" src="{{asset($member->photo)}}" width="150" height="120" title="Page Image">
                                </label>
                                @else
                                <label class="slide_upload"  for="pageImage" style="border: 2px dashed #448aff">
                                    <img id="selectedImg" src="{{asset('images/default/photo.png')}}" width="150" height="120" title="Page Image">
                                </label>
                                @endif
                                <input type="file" id="pageImage" name="photo" onchange="loadImg(this,this.id)" class="form-control"  accept="image/*" style="display: none">
                            </div>
                        </div>
                    </div> <!--end row-->
                    <!--  End Contact Information -->
                    <div class="form-group row">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
                        </div>
                    </div>
                </div><!--  card-body -->
                {!! Form::close() !!}

            </div>
        </div>
    </div>

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
        $(document).on('change','#loadThana',function(){  // load thana /upazila ------
            var id = $(this).val()

            $('#thanaUpazila').load('{{URL::to("load-thana-by-district")}}/'+id); // district id
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





