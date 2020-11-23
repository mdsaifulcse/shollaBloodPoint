@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{URL::to('gallery')}}">
                Founder Members
            </a>
        </li>
    </ul>
@endsection
@section('content')
    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-info">
                        <div class="card-btn pull-right">
                            <a  href="{{URL::to('/founder-members')}}" class="btn btn-primary btn-sm" title="Founder member list" > <i class="fa fa-list"></i> View all</a>

                        </div>
                        <h4 class="card-title">Add New Founder Members</h4>
                    </div>
                    <div class="card-body">
                        {!! Form::open(array('route' => 'founder-members.store','class'=>'form-horizontal','method'=>'POST','files'=>true)) !!}
                        <div class="modal-header">

                        </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3"> Name <sup class="text-danger">*</sup> :</label>
                                <div class="col-md-8 col-sm-8">
                                    {{Form::text('name',$value=old('name'),['class'=>'form-control','placeholder'=>'Enter Founder Member Name','required'=>true])}}
                                    <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3"> Designation <sup class="text-danger">*</sup> :</label>
                                <div class="col-md-8 col-sm-8">
                                    {{Form::text('designation',$value=old('designation'),['class'=>'form-control','min'=>0,'required'=>true])}}
                                    <span class="text-danger">{{$errors->has('designation')?$errors->first('designation'):''}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3"> Blood Group <sup class="text-danger">*</sup> :</label>
                                <div class="col-md-8 col-sm-8">
                                    {{Form::select('blood_group_id',$bloodGroups,[],['class'=>'form-control','placeholder'=>'Select Blood Group','required'=>true])}}
                                    <span class="text-danger">{{$errors->has('photo_link')?$errors->first('photo_link'):''}}</span>
                                </div>
                            </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3"> Photo <sup class="text-danger">*</sup> :</label>
                            <div class="col-md-8 col-sm-8">
                                <span class="text-danger">{{$errors->has('photo')?$errors->first('photo'):''}}</span>
                                <label class="photo"  for="pageImage" style="border: 2px dashed #448aff">
                                    <img id="selectedImg" src="{{asset('images/default/photo.png')}}" width="150" height="120" title="Page Image">
                                </label>
                                <input type="file" id="pageImage" name="photo" onchange="loadImg(this,this.id)" class="form-control"  accept="image/*" style="display: none">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3">&nbsp;</label>
                            <div class="col-md-8 col-sm-8">
                                <button type="submit" class="btn btn-sm btn-success">Confirm</button>
                            </div>
                        </div>
                        {!! Form::close(); !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end #content -->
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
    @endsection
