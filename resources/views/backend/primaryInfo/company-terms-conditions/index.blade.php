@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a>All Terms & Conditions</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header card-info">
                    All Terms & Conditions
                    <div class="card-btn pull-right">
                        <a href="{{URL::to('company-terms-conditions/create')}}" title="Create terms & conditions" class="btn btn-primary btn-sm" > <i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                </div>
                <div class="card-body">
                    @if(count($termsConditions)>0)
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Conditions Type</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th width="16%;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1;?>
                                @foreach($termsConditions as $termsCondition)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>
                                            @if($termsCondition->condition_type==1)
                                                <button class="btn btn-info btn-sm">Purchase Order</button>
                                            @elseif($termsCondition->condition_type==2)
                                                <button class="btn btn-warning btn-sm">Purchase Return</button>
                                            @elseif($termsCondition->condition_type==3)
                                                <button class="btn btn-success btn-sm">Sales</button>
                                            @elseif($termsCondition->condition_type==4)
                                                <button class="btn btn-danger btn-sm">Sales Return</button>
                                            @elseif($termsCondition->condition_type==5)
                                                <button class="btn btn-primary btn-sm">HR </button>
                                            @elseif($termsCondition->condition_type==6)
                                                <button class="btn btn-default btn-sm">Payroll</button>
                                            @elseif($termsCondition->condition_type==7)
                                                <button class="btn btn-default btn-sm">Transfer Item</button>
                                            @endif

                                        </td>
                                        <td>{{$termsCondition->condition_title}}</td>

                                        <td class="text-dark">
                                            @if($termsCondition->condition_status==1)
                                                <a title="Active"><i class="fa fa-check-circle fa-2x text-primary"></i></a>
                                            @else
                                                <a title="Inactive" ><i class="fa fa-times fa-2x text-danger"></i></a>
                                            @endif
                                        </td>
                                        <td>
                                            {!! Form::open(array('route' =>['company-terms-conditions.destroy',$termsCondition->id],'method'=>'DELETE',"id"=>"deleteForm$termsCondition->id")) !!}
                                            <input type="hidden" name="id" value="{{$termsCondition->id}}">

                                            <a href='{{URL::to("company-terms-conditions/$termsCondition->id/edit")}}' class="btn btn-info btn-xs"  title="Click here to edit this" >  <i class="fa fa-pencil-square"></i></a>
                                            <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm('deleteForm{{$termsCondition->id}}')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    @else
                        <h2 class="text-danger text-center"> No data available here. </h2>
                    @endif
                </div>
            {{$termsConditions->render()}}
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection






