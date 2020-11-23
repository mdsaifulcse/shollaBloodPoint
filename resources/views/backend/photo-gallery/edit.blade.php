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
                Photo Gallery
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
                            <a  href="{{URL::to('/gallery')}}" class="btn btn-primary btn-sm" title="Photo gallery list" > <i class="fa fa-list"></i> View all</a>

                        </div>
                        <h4 class="card-title">Edit Photo Gallery</h4>
                    </div>
                    <div class="card-body">
                        {!! Form::open(array('route' =>['gallery.update',$photoGallery->id],'class'=>'form-horizontal','method'=>'PUT')) !!}
                        <div class="modal-header">

                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3"> Title <sup class="text-danger">*</sup> :</label>
                            <div class="col-md-8 col-sm-8">
                                {{Form::text('title',$value=$photoGallery->title,['class'=>'form-control','placeholder'=>'Event Title','required'=>true])}}
                                <span class="text-danger">{{$errors->has('title')?$errors->first('title'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3"> Date <sup class="text-danger">*</sup> :</label>
                            <div class="col-md-8 col-sm-8">
                                {{Form::text('event_date',$value=date('d-m-Y',strtotime($photoGallery->event_date)),['class'=>'form-control datepicker','min'=>0,'required'=>true])}}
                                <span class="text-danger">{{$errors->has('event_date')?$errors->first('event_date'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3"> Link <sup class="text-danger">*</sup> :</label>
                            <div class="col-md-8 col-sm-8">
                                {{Form::text('photo_link',$value=$photoGallery->photo_link,['class'=>'form-control','placeholder'=>'Google Drive Link','required'=>true])}}
                                <span class="text-danger">{{$errors->has('photo_link')?$errors->first('photo_link'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3"> Status<sup class="text-danger">*</sup> :</label>
                            <div class="col-md-8 col-sm-8">
                                {{Form::select('status',['1'=>'Active','0'=>'Inactive'],$photoGallery->status,['class'=>'form-control','required'=>true])}}
                                <span class="text-danger">{{$errors->has('status')?$errors->first('status'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3">&nbsp;</label>
                            <div class="col-md-8 col-sm-8">
                                <button type="submit" class="btn btn-sm btn-success">Save Change</button>
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
