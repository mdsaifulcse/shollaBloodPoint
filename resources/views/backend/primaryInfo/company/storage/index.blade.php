@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{URL::to('company')}}">
                Company
            </a>
        </li>

        <li class="breadcrumb-item">
            <a> Depot</a>
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
                            <a  href="#modal-dialog" class="btn btn-primary btn-sm" data-toggle="modal" > <i class="fa fa-plus"></i> Add New</a>

                        </div>
                        <h4 class="card-title">Depot @if(isset($company)) of {{$company->company_name}} @endif </h4>
                    </div>
                    <div class="card-body">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="modal-dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    {!! Form::open(array('route' => 'storage-info.store','class'=>'form-horizontal','method'=>'POST')) !!}
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Depot</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Branch :</label>
                                            <div class="col-md-8 col-sm-8">
                                                {{Form::select('branch_id',$branches,[],['class'=>'form-control','placeholder'=>'Select one'])}}
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3">  Name <sup class="text-danger">*</sup>:</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" value="" name="storage_name" class="form-control" placeholder="Enter storage/depot name" required>
                                                <input type="hidden" value=" @if(isset($company)) {{$company->id}} @endif " name="company_id">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Address <sup class="text-danger">*</sup>:</label>
                                            <div class="col-md-8 col-sm-8">
                                                <textarea class="form-control" name="address" rows="3" placeholder="Write some description about storage" required></textarea>
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

                            <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                <thead>
                                <tr>
                                    <th width="5%">Sl</th>
                                    <th width="15%">Depot Name</th>
                                    <th width="20%">Branch Name</th>
                                    <th width="25%">address</th>
                                    <th width="8%">status</th>
                                    <th width="8%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=0; ?>
                                @foreach($storages as $storage)
                                    <?php $i++; ?>
                                    <tr class="odd gradeX">
                                        <td>{{$i}}</td>
                                        <td>{{$storage->storage_name}}</td>

                                        <td>@if(isset($storage->storageBranch->branch_name)) {{$storage->storageBranch->branch_name}} @endif</td>
                                        <td>{{$storage->address}}</td>
                                        <td>
                                            @if($storage->status=="1")
                                                {{"Active"}}
                                            @else
                                                {{"Inactive"}}
                                            @endif
                                        </td>
                                        <td>
                                            <!-- edit section -->
                                            <a href="#modal-dialog<?php echo $storage->id;?>" class="btn btn-xs btn-success" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <!-- #modal-dialog -->

                                            <div class="modal fade" id="modal-dialog<?php echo $storage->id;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        {!! Form::open(array('route' => ['storage-info.update',$storage->id],'class'=>'form-horizontal','method'=>'PUT')) !!}
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Depot</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3">Status :</label>
                                                                <div class="col-md-4 col-sm-4">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="status" value="1" id="radio-required" data-parsley-required="true" @if($storage->status=="1"){{"checked"}}@endif> Active
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-4">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="status" id="radio-required2" value="0" @if($storage->status=="0"){{"checked"}}@endif> Inactive
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Branch <sub>*</sub> :</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    {{Form::select('branch_id',$branches,$storage->branch_id,['class'=>'form-control','placeholder'=>'Select one'])}}
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3">Name <sup>*</sup>:</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    <input type="text" value="{{$storage->storage_name}}" name="storage_name" class="form-control" placeholder="Enter storage/depot name">
                                                                    <input type="hidden" value="{{$storage->company_id}}" name="company_id">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Address <sup>*</sup>:</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    <textarea class="form-control" name="address" rows="3" placeholder="Write some description about storage">{{$storage->address}}</textarea>
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
                                            {{Form::open(array('route'=>['storage-info.destroy',$storage->id],'method'=>'DELETE','class'=>'deleteForm','id'=>"deleteForm$storage->id"))}}
                                            <button type="button" class="btn btn-danger btn-xs" onclick='return deleteConfirm("deleteForm{{$storage->id}}")'><i class="fa fa-trash"></i></button>
                                        {!! Form::close() !!}
                                        <!-- delete section end -->
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$storages->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end #content -->
@endsection
