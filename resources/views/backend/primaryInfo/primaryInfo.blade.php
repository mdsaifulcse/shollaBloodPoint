@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{URL::to('primary-info')}}">Organization Info</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header card-info">
                    Organization Info
                </div>

                <div class="card-body">
                    {!! Form::open(array('route' =>['primary-info.update', $data->id],'method'=>'PUT','class'=>'form-horizontals','files'=>true)) !!}

                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="form-group col-md-6 no-padding {{ $errors->has('company_name') ? 'has-error' : '' }}">
                                    {{Form::label('company_name', 'Name of Organization', array('class' => 'col-md-12'))}}
                                    <div class="col-md-12">
                                        {{Form::text('company_name',$data->company_name,array('class'=>'form-control','placeholder'=>'Name of Organization'))}}
                                        @if ($errors->has('company_name'))
                                            <span class="help-block">
                            <strong>{{ $errors->first('company_name') }}</strong>
                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group  col-md-6 no-padding {{ $errors->has('address') ? 'has-error' : '' }}">
                                    {{Form::label('address', 'Organization Address', array('class' => 'col-md-12'))}}
                                    <div class="col-md-12">
                                        {{Form::text('address',$data->address,array('class'=>'form-control','placeholder'=>'Organization Address'))}}
                                        @if ($errors->has('address'))
                                            <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-6 no-padding  {{ $errors->has('mobile_no') ? 'has-error' : '' }}">
                                    {{Form::label('mobile_no', 'Contact Number', array('class' => 'col-md-12'))}}
                                    <div class="col-md-12">
                                        {{Form::text('mobile_no',$data->mobile_no,array('class'=>'form-control','placeholder'=>'Contact Number'))}}
                                        @if ($errors->has('mobile_no'))
                                            <span class="help-block">
                            <strong>{{ $errors->first('mobile_no') }}</strong>
                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-6 no-padding  {{ $errors->has('email') ? 'has-error' : '' }}">
                                    {{Form::label('email', 'Email', array('class' => 'col-md-12'))}}
                                    <div class="col-md-12">
                                        {{Form::email('email',$data->email,array('class'=>'form-control','placeholder'=>'Email'))}}
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 no-padding ">
                            <div class="row">
                                <div class="form-group  col-md-8 no-padding {{ $errors->has('logo') ? 'has-error' : '' }}">
                                    {{Form::label('logo', 'Organization Logo', array('class' => 'col-md-12'))}}
                                    <div class="col-md-12">
                                        <label class="upload_photo upload client_logo_upload" for="file">
                                            <!--  -->
                                            <img src="{{asset($data->logo)}}" id="image_load">
                                            <i class="upload_hover ion ion-ios-camera-outline"></i>
                                        </label>
                                        {{Form::file('logo',array('id'=>'file','style'=>'display:none','onchange'=>'loadPhoto(this,"image_load")'))}}
                                        @if ($errors->has('logo'))
                                            <span class="help-block" style="display:block">
                            <strong>{{ $errors->first('logo') }}</strong>
                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-4 no-padding {{ $errors->has('favicon') ? 'has-error' : '' }}">
                                    {{Form::label('favicon', ' Icon', array('class' => 'col-md-12'))}}
                                    <div class="col-md-12">
                                        <label class="upload_photo upload client_favicon_upload" for="file2">
                                            <!--  -->
                                            <img src="{{asset($data->favicon)}}" id="image_load2">
                                            <i class="upload_hover ion ion-ios-camera-outline"></i>
                                        </label>
                                        {{Form::file('favicon',array('id'=>'file2','style'=>'display:none','onchange'=>'loadPhoto(this,"image_load2")'))}}
                                        @if ($errors->has('favicon'))
                                            <span class="help-block" style="display:block">
                            <strong>{{ $errors->first('favicon') }}</strong>
                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                            <label>Short description</label>
                            <div class="">
                                <textarea name="short_description" rows="5" class="form-control tinymce" placeholder="Short description about organization">{{$data->short_description}}</textarea>
                                <span class="text-danger">
                                {{$errors->has('short_description')?$errors->first('short_description'):''}}
                                </span>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="form-group row">
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                            <label>Description	more</label>
                            <div class="">
                                <textarea name="description" rows="8" class="form-control tinymce" placeholder="Details Short description about organization">{{$data->description}}</textarea>
                                <span class="text-danger">
                                {{$errors->has('description')?$errors->first('description'):''}}
                                </span>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="form-group row">
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                            <label>Write basic works by comma (,) separated</label>
                            <div class="">
                                {{Form::text('company_tag',$value=$data->company_tag,['class'=>'form-control','placeholder'=>'Organization tags','required'=>true])}}
                                <span class="text-danger">
                                {{$errors->has('company_tag')?$errors->first('company_tag'):''}}
                                </span>
                            </div>
                        </div>
                    </div><!--end row-->
                        {{Form::hidden('id',$data->id)}}

                        <div class="form-group col-md-12 no-padding">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>

@endsection

