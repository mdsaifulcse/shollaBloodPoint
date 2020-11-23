@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a>Create new terms & conditions</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    Create new terms & conditions
                    <div class="card-btn pull-right">
                        <a href="{{URL::to('company-terms-conditions')}}" class="btn btn-primary btn-sm" > <i class="fa fa-list"></i> View All</a>
                    </div>
                </div>

                {!! Form::open(array('route' =>'company-terms-conditions.store','method'=>'POST','class'=>'form-horizontal','files'=>true)) !!}
                <div class="card-body">

                    <div class="form-group row  {{ $errors->has('condition_type') ? 'has-error' : '' }}">
                        {{Form::label('condition_type', 'Terms & Conditions Type', array('class' => 'col-md-3 control-label'))}}
                        <div class="col-md-8">
                            {{Form::select('condition_type',['1'=>'Purchase Order','2'=>'Purchase Return','3'=>'Sales','4'=>'Sales Return','5'=>'HR','6'=>'Payroll','7'=>'Transfer Item'],[],['id'=>'companyId','class'=>'form-control','required'=>true,'placeholder'=>'Select one'])}}
                            @if ($errors->has('condition_type'))
                                <span class="help-block" style="display:block">
                            <strong>{{ $errors->first('condition_type') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row  {{ $errors->has('condition_title') ? 'has-error' : '' }}">
                        {{Form::label('condition_title', 'Condition Title', array('class' => 'col-md-3 control-label'))}}
                        <div class="col-md-8">
                            {{Form::text('condition_title',$value=old('condition_title'),['class'=>'form-control'])}}
                            @if ($errors->has('condition_title'))
                                <span class="help-block" style="display:block">
                            <strong>{{ $errors->first('condition_title') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row  {{ $errors->has('condition_details') ? 'has-error' : '' }}">
                        {{Form::label('condition_details', 'Condition Details', array('class' => 'col-md-3 control-label'))}}
                        <div class="col-md-8">
                            {{Form::textarea('condition_details',$value=old('condition_details'),['class'=>'form-control tinymce','rows'=>'4'])}}
                            @if ($errors->has('condition_details'))
                                <span class="help-block" style="display:block">
                            <strong>{{ $errors->first('condition_details') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row  {{ $errors->has('condition_status') ? 'has-error' : '' }}">
                        {{Form::label('email', 'Status', array('class' => 'col-md-3 control-label'))}}
                        <div class="col-md-8">
                            {{Form::select('condition_status',['1'=>'Active','0'=>'Inactive'],[],['class'=>'form-control','required'=>true])}}
                            @if ($errors->has('condition_status'))
                                <span class="help-block" style="display:block">
                            <strong>{{ $errors->first('condition_status') }}</strong>
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
