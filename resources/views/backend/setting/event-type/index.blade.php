@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{URL::to('cities')}}">
                Event Type
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
                            <a  href="#modal-dialog" class="btn btn-primary btn-sm" data-toggle="modal" title="Add new event type " > <i class="fa fa-plus"></i> Add New</a>

                        </div>
                        <h4 class="card-title">All Event Type List</h4>
                    </div>
                    <div class="card-body">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="modal-dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    {!! Form::open(array('route' => 'event-type.store','class'=>'form-horizontal','method'=>'POST')) !!}
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add new event type</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Name <sup class="text-danger">*</sup> :</label>
                                            <div class="col-md-8 col-sm-8">
                                                {{Form::text('event_type',$value=old('event_type'),['class'=>'form-control','placeholder'=>'event types name','required'=>true])}}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Serial <sup class="text-danger">*</sup> :</label>
                                            <div class="col-md-8 col-sm-8">
                                                {{Form::number('serial_num',$value=$max_serial+1,['class'=>'form-control','min'=>1,'max'=>$max_serial+1,'required'=>true])}}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <a href="javascript:;" class="btn btn-sm btn-danger" data-dismiss="modal">Close</a>
                                        <button type="submit" class="btn btn-sm btn-success">Confirm</button>
                                    </div>
                                    {!! Form::close(); !!}
                                </div>
                            </div>
                        </div> <!--  =================== End modal ===================  -->

                        <!--  -->
                        <div class="view_branch_set">

                            @if(count($eventTypes)>0)
                                <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>City</th>
                                        <th>Url</th>
                                        <th>Sub Event type</th>
                                        <th>Status</th>
                                        <th width="16%;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=0; ?>

                                    @foreach($eventTypes as $eventType)
                                        <?php $i++; ?>
                                        <tr class="odd gradeX">
                                            <td>{{$i++}}</td>
                                            <td>{{$eventType->event_type}}</td>
                                            <td>{{$eventType->url}}</td>
                                            <td><a href="{{URL::to('/sub-event-type/'.$eventType->id)}}" class="btn btn-success btn-xs">Sub Event Type</a></td>
                                            <td class="text-dark">
                                                @if($eventType->status==1)
                                                    <a title="Active"><i class="fa fa-check-circle fa-2x text-primary"></i></a>
                                                @else
                                                    <a title="Inactive" ><i class="fa fa-times fa-2x text-danger"></i></a>
                                                @endif
                                            </td>
                                            <td>
                                                <!-- edit section -->
                                                <a href="#modal-dialog<?php echo $eventType->id;?>" class="btn btn-xs btn-primary" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <!-- #modal-dialog -->

                                                <div class="modal fade" id="modal-dialog<?php echo $eventType->id;?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            {!! Form::open(array('route' => ['event-type.update',$eventType->id],'class'=>'form-horizontal','method'=>'PUT')) !!}
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit old city info</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3">Status :</label>
                                                                    <div class="col-md-4 col-sm-4">
                                                                        <div class="radio">
                                                                            <label>
                                                                                <input type="radio" name="status" value="1" id="radio-required" data-parsley-required="true" @if($eventType->status=="1"){{"checked"}}@endif> Active
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4">
                                                                        <div class="radio">
                                                                            <label>
                                                                                <input type="radio" name="status" id="radio-required2" value="0" @if($eventType->status=="0"){{"checked"}}@endif> Inactive
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3"> Name <sup class="text-danger">*</sup> :</label>
                                                                    <div class="col-md-8 col-sm-8">
                                                                        {{Form::text('event_type',$value=$eventType->event_type,['class'=>'form-control','placeholder'=>'event types name','required'=>true])}}
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3"> Url <sup class="text-danger">*</sup> :</label>
                                                                    <div class="col-md-8 col-sm-8">
                                                                        {{Form::text('url',$value=$eventType->url,['class'=>'form-control','placeholder'=>'url','required'=>true,'readonly'=>true,])}}
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3"> Serial <sup class="text-danger">*</sup> :</label>
                                                                    <div class="col-md-8 col-sm-8">
                                                                        {{Form::number('serial_num',$value=$eventType->serial_num,['class'=>'form-control','min'=>1,'required'=>true])}}
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="javascript:;" class="btn btn-sm btn-danger" data-dismiss="modal">Close</a>
                                                                <button type="submit" class="btn btn-sm btn-success">Update</button>
                                                            </div>
                                                            {!! Form::close(); !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end edit section -->

                                                <!-- delete section -->
                                                {{Form::open(array('route'=>['event-type.destroy',$eventType->id],'method'=>'DELETE','class'=>'deleteForm','id'=>"deleteForm$eventType->id"))}}
                                                <button type="button" class="btn btn-danger btn-xs" onclick='return deleteConfirm("deleteForm{{$eventType->id}}")'><i class="fa fa-trash"></i></button>
                                            {!! Form::close() !!}
                                            <!-- delete section end -->
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <h2 class="text-danger text-center"> No data available here. </h2>
                                    @endif
                                    </tbody>
                                </table>
                                {{$eventTypes->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end #content -->
@endsection
