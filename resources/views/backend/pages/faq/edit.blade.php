@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{URL::to('faq')}}">Faq</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row ">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header card-info">
                    Update old faq
                    <div class="card-btn pull-right">
                        <a href="{{URL::to('faq')}}" title="View All faq" class="btn btn-primary btn-sm" > <i class="fa fa-list"></i> View All</a>
                    </div>
                </div>

                {!! Form::open(array('route' =>['faq.update',$faq->id],'method'=>'PUT','class'=>'form-horizontals','files'=>true)) !!}
                <div class="card-body">

                    <div class="form-group row">
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                            <label>Faq Title</label>
                            <div class="">
                                {{Form::text('title',$value=$faq->title,['class'=>'form-control','required'=>true])}}
                                <span class="text-danger">
                                    {{$errors->has('title')?$errors->first('title'):''}}
                                    </span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                            <label>Status</label>
                            <div class="">
                                {{Form::select('status',['1'=>'Active','0'=>'Inactive'],$faq->status,['class'=>'form-control','required'=>true])}}
                            </div>
                            <span class="text-danger">
                                    {{$errors->has('status')?$errors->first('status'):''}}
                                </span>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                            <label>Serial No:</label>
                            <div class="">
                                {{Form::number('serial_num',$value=$faq->serial_num,['min'=>1,'class'=>'form-control','required'=>true])}}
                            </div>
                            <span class="text-danger">
                                    {{$errors->has('status')?$errors->first('status'):''}}
                                </span>
                        </div>
                    </div><!--end row-->

                    <div class="form-group row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label>Details</label>
                            <div class="">
                                {{Form::textarea('details',$value=$faq->details,['class'=>'form-control tinymce','rows'=>8])}}
                                <span class="text-danger">
                                {{$errors->has('details')?$errors->first('details'):''}}
                                </span>
                            </div>
                        </div>
                    </div><!--end row-->
                    <!--  End Contact Information -->
                    <div class="form-group row">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div><!--  card-body -->
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection
@section('script')
@endsection





