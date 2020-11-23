@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{URL::to('blood-group')}}">
                Blood Group
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
                        
                        </div>
                        <h4 class="card-title">All Blood Group</h4>
                    </div>
                    <div class="card-body">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="modal-dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    {!! Form::open(array('route' => 'blood-group.store','class'=>'form-horizontal','method'=>'POST')) !!}
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add new blood group</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Name <sup class="text-danger">*</sup> :</label>
                                            <div class="col-md-8 col-sm-8">
                                                {{Form::text('name',$value=old('name'),['class'=>'form-control','placeholder'=>'blood group name','required'=>true])}}
                                                <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Admin Mobile <sup class="text-danger">*</sup> :</label>
                                            <div class="col-md-8 col-sm-8">
                                                {{Form::number('mobile',$value=old('mobile'),['class'=>'form-control','min'=>0,'required'=>true])}}
                                                <span class="text-danger">{{$errors->has('mobile')?$errors->first('mobile'):''}}</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Admin Name <sup class="text-danger">*</sup> :</label>
                                            <div class="col-md-8 col-sm-8">
                                                {{Form::text('admin_name',$value=old('admin_name'),['class'=>'form-control','required'=>true])}}
                                                <span class="text-danger">{{$errors->has('admin_name')?$errors->first('admin_name'):''}}</span>
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

                            @if(count($bloodGroups)>0)
                                <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Blood Group</th>
                                        <th>Admin Mobile</th>
                                        <th>Admin Name</th>
                                        <th>Status</th>
                                        <th width="16%;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; ?>

                                    @foreach($bloodGroups as $bloodGroup)
                                        <tr class="odd gradeX">
                                            <td>{{$i++}}</td>
                                            <td>{{$bloodGroup->name}}</td>
                                            <td>{{$bloodGroup->mobile}}</td>
                                            <td>{{$bloodGroup->admin_name}}</td>
                                            <td class="text-dark">
                                                @if($bloodGroup->status==1)
                                                    <a title="Active"><i class="fa fa-check-circle fa-2x text-primary"></i></a>
                                                @else
                                                    <a title="Inactive" ><i class="fa fa-times fa-2x text-danger"></i></a>
                                                @endif
                                            </td>
                                            <td>
                                                <!-- edit section -->
                                                <a href="#modal-dialog<?php echo $bloodGroup->id;?>" class="btn btn-xs btn-warning" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <!-- #modal-dialog -->

                                                <div class="modal fade" id="modal-dialog<?php echo $bloodGroup->id;?>">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            {!! Form::open(array('route' => ['blood-group.update',$bloodGroup->id],'class'=>'form-horizontal','method'=>'PUT')) !!}
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit old blood group info</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3">Status :</label>
                                                                    <div class="col-md-4 col-sm-4">
                                                                        <div class="radio">
                                                                            <label>
                                                                                <input type="radio" name="status" value="1" id="radio-required" data-parsley-required="true" @if($bloodGroup->status=="1"){{"checked"}}@endif> Active
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4">
                                                                        <div class="radio">
                                                                            <label>
                                                                                <input type="radio" name="status" id="radio-required2" value="0" @if($bloodGroup->status=="0"){{"checked"}}@endif> Inactive
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3"> Name <sup class="text-danger">*</sup> :</label>
                                                                    <div class="col-md-8 col-sm-8">
                                                                        {{Form::text('name',$value=$bloodGroup->name,['class'=>'form-control','placeholder'=>'blood group name','required'=>true])}}
                                                                        <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>

                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3"> Mobile <sup class="text-danger">*</sup> :</label>
                                                                    <div class="col-md-8 col-sm-8">
                                                                        {{Form::text('mobile',$value=$bloodGroup->mobile,['class'=>'form-control','min'=>0,'required'=>true])}}
                                                                        <span class="text-danger">{{$errors->has('mobile')?$errors->first('mobile'):''}}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3"> Admin Name <sup class="text-danger">*</sup> :</label>
                                                                    <div class="col-md-8 col-sm-8">
                                                                        {{Form::text('admin_name',$value=$bloodGroup->admin_name,['class'=>'form-control','required'=>true])}}
                                                                        <span class="text-danger">{{$errors->has('admin_name')?$errors->first('admin_name'):''}}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3"> Serial <sup class="text-danger">*</sup> :</label>
                                                                    <div class="col-md-8 col-sm-8">
                                                                        {{Form::number('serial_num',$value=$bloodGroup->serial_num,['class'=>'form-control','min'=>1,'required'=>true])}}
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
                                                {{Form::open(array('route'=>['blood-group.destroy',$bloodGroup->id],'method'=>'DELETE','class'=>'deleteForm','id'=>"deleteForm$bloodGroup->id"))}}
                                                {{--<button type="button" class="btn btn-danger btn-xs" onclick='return deleteConfirm("deleteForm{{$bloodGroup->id}}")'><i class="fa fa-trash"></i></button>--}}
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
                                {{$bloodGroups->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end #content -->
@endsection
