@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a>All Company</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    All Company
                    <div class="card-btn pull-right">
                        <a href="{{URL::to('company/create')}}" class="btn btn-primary btn-sm" > <i class="fa fa-plus"></i> Add New</a>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if(count($allData)>0)
                        <table class="table  table-striped table-bordered">
                        <thead>
                        <tr>
                            <th width="5%">SL</th>
                            <th>Company Name</th>
                            <th>Mobile No</th>
                            <th>Address</th>
                            <th>Branch</th>
                            <th>Depot</th>
                            <th width="7%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=0; ?>
                        @foreach($allData as $data)
                            <?php $i++; ?>
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$data->company_name}}</td>
                                <td>{{$data->mobile_no}}</td>
                                <td>{{$data->address}}</td>
                                <td> <a class="btn btn-xs btn-info" href='{{URL::to("company-branch/$data->id   ")}}'> Branch <span class="badge"> {{count($data->branch)}} </span> </a> </td>
                                <td>
                                    <a class="btn btn-xs btn-success" href='{{URL::to("storage-info/$data->id   ")}}' title="View All Storage"> Depot <span class="badge"> {{count($data->companyStorage)}} </span> </a>
                                </td>
                                <td style="text-align: center">
                                    {{Form::open(array('route'=>['company.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id"))}}
                                    <a href='{{URL::to("company/$data->id/edit")}}' class="btn btn-info btn-xs"> <i class="fa fa-pencil-square"></i></a>
                                    <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm('deleteForm{{$data->id}}')"><i class="fa fa-trash"></i></button>
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
                {{$allData->render()}}
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col-lg-12 -->
    </div>



@endsection