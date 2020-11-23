@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a>Create Company</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    Create New Company
                    <div class="card-btn pull-right">
                        <a href="{{URL::to('company')}}" class="btn btn-primary btn-sm" > <i class="fa fa-list"></i> View All</a>
                    </div>
                </div>

                {!! Form::open(array('route' =>'company.store','method'=>'POST','class'=>'form-horizontal','files'=>true)) !!}
                <div class="card-body">
                    <div class="form-group row {{ $errors->has('logo') ? 'has-error' : '' }}">
                        {{Form::label('logo', 'Organization Logo', array('class' => 'col-md-3 control-label'))}}
                        <div class="col-md-8">
                            <label class="upload_photo upload client_logo_upload" for="file">
                                <!--  -->
                                <img id="image_load">
                                {{--<i class="upload_hover fa fa-picture-o"></i>--}}
                            </label>
                            {{Form::file('logo',array('id'=>'file','style'=>'display:none','onchange'=>'loadPhoto(this,"image_load")'))}}
                            @if ($errors->has('logo'))
                                <span class="help-block" style="display:block">
                            <strong>{{ $errors->first('logo') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row {{ $errors->has('favicon') ? 'has-error' : '' }}">
                        {{Form::label('favicon', 'Organization Icon', array('class' => 'col-md-3 control-label'))}}
                        <div class="col-md-8">
                            <label class="upload_photo upload client_favicon_upload" for="file2">
                                <!--  -->
                                <img id="image_load2">
                            </label>
                            {{Form::file('favicon',array('id'=>'file2','style'=>'display:none','onchange'=>'loadPhoto(this,"image_load2")'))}}
                            @if ($errors->has('favicon'))
                                <span class="help-block" style="display:block">
                            <strong>{{ $errors->first('favicon') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row  {{ $errors->has('company_name') ? 'has-error' : '' }}">
                        {{Form::label('company_name', 'Name of Organization', array('class' => 'col-md-3 control-label'))}}
                        <div class="col-md-8">
                            {{Form::text('company_name','',array('class'=>'form-control','placeholder'=>'Name of Organization'))}}
                            @if ($errors->has('company_name'))
                                <span class="help-block">
                            <strong>{{ $errors->first('company_name') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row  {{ $errors->has('address') ? 'has-error' : '' }}">
                        {{Form::label('address', 'Organization Address', array('class' => 'col-md-3 control-label'))}}
                        <div class="col-md-8">
                            {{Form::text('address','',array('class'=>'form-control','placeholder'=>'Organization Address'))}}
                            @if ($errors->has('address'))
                                <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row  {{ $errors->has('mobile_no') ? 'has-error' : '' }}">
                        {{Form::label('mobile_no', 'Contact Number', array('class' => 'col-md-3 control-label'))}}
                        <div class="col-md-8">
                            {{Form::text('mobile_no','',array('class'=>'form-control','placeholder'=>'Contact Number'))}}
                            @if ($errors->has('mobile_no'))
                                <span class="help-block">
                            <strong>{{ $errors->first('mobile_no') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row  {{ $errors->has('email') ? 'has-error' : '' }}">
                        {{Form::label('email', 'Email', array('class' => 'col-md-3 control-label'))}}
                        <div class="col-md-8">
                            {{Form::email('email','',array('class'=>'form-control','placeholder'=>'Email'))}}
                            @if ($errors->has('email'))
                                <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row  {{ $errors->has('shipping_address') ? 'has-error' : '' }}">
                        {{Form::label('shipping_address', 'Shipping Address', array('class' => 'col-md-3 control-label'))}}
                        <div class="col-md-8">
                            {{Form::text('shipping_address','',array('class'=>'form-control','placeholder'=>'Shipping Address'))}}
                            @if ($errors->has('shipping_address'))
                                <span class="help-block">
                            <strong>{{ $errors->first('shipping_address') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group  row {{ $errors->has('modules') ? 'has-error' : '' }}">
                        {{Form::label('modules', 'Modules', array('class' => 'col-md-3 control-label'))}}
                        <div class="col-md-8">
                            {{Form::select('modules[]',$modules,'',['class'=>'form-control select','multiple','required'])}}
                            @if ($errors->has('modules'))
                                <span class="help-block">
                            <strong>{{ $errors->first('modules') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection

