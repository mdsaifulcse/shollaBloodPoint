@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{URL::to('blood-bank')}}">Blood Bank</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row ">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header card-info">
                    Create new blook bank
                    <div class="card-btn pull-right">
                        <a href="{{URL::to('blood-bank')}}" title="View All Notices" class="btn btn-primary btn-sm" > <i class="fa fa-list"></i> All Blood Banks</a>
                    </div>
                </div>

                {!! Form::open(array('route' =>'blood-bank.store','method'=>'POST','class'=>'form-horizontals','files'=>true)) !!}
                <div class="card-body">

                    <div class="form-group row">
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                            <label>Blood Bank Name</label>
                            <div class="">
                                {{Form::text('name',$value=old('name'),['class'=>'form-control','required'=>true])}}
                                <span class="text-danger">
                                    {{$errors->has('name')?$errors->first('name'):''}}
                                    </span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                            <label>Status</label>
                            <div class="">
                                {{Form::select('status',['1'=>'Active','0'=>'Inactive'],[],['class'=>'form-control','required'=>true])}}
                            </div>
                            <span class="text-danger">
                                    {{$errors->has('status')?$errors->first('status'):''}}
                                </span>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                            <label>Serial No:</label>
                            <div class="">
                                {{Form::number('serial_num',$value=$maxNum+1,['min'=>1,'max'=>$maxNum+1,'class'=>'form-control','required'=>true])}}
                            </div>
                            <span class="text-danger">
                                    {{$errors->has('serial_num')?$errors->first('serial_num'):''}}
                                </span>
                        </div>
                    </div><!--end row-->

                    <div class="form-group row">
                        <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                            <label>Address</label>
                            <div class="">
                                {{Form::text('address',$value=old('address'),['class'=>'form-control','placeholder'=>'Blood Bank Address','required'=>true])}}
                                <span class="text-danger">
                                    {{$errors->has('address')?$errors->first('address'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                            <label><i class="fa fa-globe"></i> Web</label>
                            {{Form::text('web',$value=old('web'),['class'=>'form-control','placeholder'=>'Blood Bank website','required'=>false])}}
                            <span class="text-danger">
                                {{$errors->has('web')?$errors->first('web'):''}}
                            </span>
                        </div>
                    </div><!--end row-->
                    <div class="form-group row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label><i class="fa fa-phone"></i> Contact</label>
                            <div class="">
                                {{Form::text('contact',$value=old('contact'),['class'=>'form-control','placeholder'=>'Contact Number','required'=>true])}}
                                <span class="text-danger">
                                    {{$errors->has('contact')?$errors->first('contact'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label> District </label>
                            {{Form::text('district',$value=old('district'),['class'=>'form-control','required'=>false])}}
                            <span class="text-danger">
                                {{$errors->has('district')?$errors->first('district'):''}}
                            </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label> Category </label>
                            {{Form::text('category',$value=old('category'),['class'=>'form-control','placeholder'=>'Blood Bank Category','required'=>false])}}
                            <span class="text-danger">
                                {{$errors->has('category')?$errors->first('category'):''}}
                            </span>
                        </div>
                    </div><!--end row-->

                    <div class="form-group row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label>Notes About This Blood Bank</label>
                            <div class="">
                                {{Form::textarea('notes',$value=old('notes'),['class'=>'form-control tinymce','placeholder'=>'Details about our page','required'=>false,'rows'=>8])}}
                                <span class="text-danger">
                                {{$errors->has('notes')?$errors->first('notes'):''}}
                                </span>
                            </div>
                        </div>
                    </div><!--end row-->
                    <!--  End Contact Information -->
                    <div class="form-group row">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-folder"></i> Save</button>
                        </div>
                    </div>
                </div><!--  card-body -->
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection





