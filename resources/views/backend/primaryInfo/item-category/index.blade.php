@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{URL::to('item-category')}}">
                Item Category
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
                            <a  href="#modal-dialog" class="btn btn-primary btn-sm" data-toggle="modal" > <i class="fa fa-plus"></i> Add New</a>

                        </div>
                        <h4 class="card-title">All Item Category</h4>
                    </div>
                    <div class="card-body">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="modal-dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    {!! Form::open(array('route' => 'item-category.store','class'=>'form-horizontal','method'=>'POST')) !!}
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Item Category</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Name <sub>*</sub> :</label>
                                            <div class="col-md-8 col-sm-8">
                                                {{Form::text('category_name',$value=old('category_name'),['class'=>'form-control','placeholder'=>'Category name','required'=>true])}}
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3">  Type <sub>*</sub>:</label>
                                            <div class="col-md-8 col-sm-8">
                                                {{Form::select('type',['1'=>'Service','2'=>'Item'],[],['class'=>'form-control','placeholder'=>'Select Type','required'=>true])}}
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Details :</label>
                                            <div class="col-md-8 col-sm-8">
                                                {{Form::textarea('details',$value=old('details'),['class'=>'form-control','rows'=>3,'placeholder'=>'Something about category'])}}
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

                        @if(count($itemCategories)>0)
                            <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Category Name</th>
                                    <th>Type</th>
                                    <th>Details</th>
                                    <th>Status</th>
                                    <th width="16%;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=0; ?>

                                @foreach($itemCategories as $itemCategory)
                                    <?php $i++; ?>
                                    <tr class="odd gradeX">
                                        <td>{{$i++}}</td>
                                        <td>{{$itemCategory->category_name}}</td>
                                        <td>
                                            @if($itemCategory->type==1)
                                                <span>Service</span>
                                            @elseif($itemCategory->type==2)
                                                <span>Item</span>
                                            @endif
                                        </td>
                                        <td>{{$itemCategory->details}}</td>


                                        <td class="text-dark">
                                            @if($itemCategory->status==1)
                                                <a title="Active"><i class="fa fa-check-circle fa-2x text-primary"></i></a>
                                            @else
                                                <a title="Inactive" ><i class="fa fa-times fa-2x text-danger"></i></a>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- edit section -->
                                            <a href="#modal-dialog<?php echo $itemCategory->id;?>" class="btn btn-xs btn-success" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <!-- #modal-dialog -->

                                            <div class="modal fade" id="modal-dialog<?php echo $itemCategory->id;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        {!! Form::open(array('route' => ['item-category.update',$itemCategory->id],'class'=>'form-horizontal','method'=>'PUT')) !!}
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Old Item Category Info</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3">Status :</label>
                                                                <div class="col-md-4 col-sm-4">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="status" value="1" id="radio-required" data-parsley-required="true" @if($itemCategory->status=="1"){{"checked"}}@endif> Active
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-4">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="status" id="radio-required2" value="0" @if($itemCategory->status=="0"){{"checked"}}@endif> Inactive
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Name <sub>*</sub> :</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    {{Form::text('category_name',$value=$itemCategory->category_name,['class'=>'form-control','placeholder'=>'Category name','required'=>true])}}
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Type <sub>*</sub>:</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    {{Form::select('type',['1'=>'Service','2'=>'Item'],$itemCategory->type,['class'=>'form-control','placeholder'=>'Select Type','required'=>true])}}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Details :</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    {{Form::textarea('details',$value=$itemCategory->details,['class'=>'form-control','rows'=>3,'placeholder'=>'Something about category'])}}
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
                                            {{Form::open(array('route'=>['item-category.destroy',$itemCategory->id],'method'=>'DELETE','class'=>'deleteForm','id'=>"deleteForm$itemCategory->id"))}}
                                            <button type="button" class="btn btn-danger btn-xs" onclick='return deleteConfirm("deleteForm{{$itemCategory->id}}")'><i class="fa fa-trash"></i></button>
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
                            {{$itemCategories->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end #content -->
@endsection
