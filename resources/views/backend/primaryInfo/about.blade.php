@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{URL::to('primary-info')}}">Login Description</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    Login Description
                    <div class="card-btn pull-right">

                    </div>
                </div>

                {!! Form::open(array('route' =>['primary-info.update', $data->id],'method'=>'PUT','class'=>'form-horizontal','files'=>true)) !!}
                <div class="card-body">


                    <div class="form-group  {{ $errors->has('description') ? 'has-error' : '' }}">
                        {{Form::label('description', 'Login Description', array('class' => 'col-md-12'))}}
                        <div class="col-md-12">
                            {{Form::textArea('description',$data->description,array('class'=>'form-control tinymce','placeholder'=>'Login Description','rows'=>'10','id'=>'editor1'))}}
                            @if ($errors->has('description'))
                                <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>



                    {{Form::hidden('id',$data->id)}}
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection

