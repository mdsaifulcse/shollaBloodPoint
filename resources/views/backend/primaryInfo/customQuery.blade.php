@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{URL::to('primary-info')}}">Custom Query</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card" style="background: yellow">
                <div class="card-header card-danger">
                    Custom Query
                    <div class="card-btn pull-right">

                    </div>
                </div>

                {!! Form::open(array('url' =>'custom-query','method'=>'POST','class'=>'form-horizontal')) !!}
                <div class="card-body">
                    <h3 class="text-danger text-center"> Danger Zone. Its only for developer. </h3>

                    <div class="form-group  {{ $errors->has('description') ? 'has-error' : '' }}">
                        {{Form::label('description', 'Custom Query', array('class' => 'col-md-12'))}}
                        <div class="col-md-12">
                            {{Form::textArea('description','',array('class'=>'form-control','placeholder'=>'Custom Query','rows'=>'15','style'=>'background:#000;color:#fff;'))}}
                            @if ($errors->has('description'))
                                <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                <div class="col-md-12">
                    @if(Session::has('query'))
                    Last Added Query: <br>
                    {{Session::get('query')}}
                        <?php Session::forget('query') ?>
                    @endif
                </div>
            </div>
        </div>
    </div>


@endsection

