@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{URL::to('blood-bank')}}"> Blook Bank</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    All Blood Banks
                    <div class="card-btn pull-right">
                        <a href="{{route('blood-bank.create')}}" title="Add new blook bank" class="btn btn-primary btn-sm pull-right"> <i class="fa fa-plus-circle"></i> Add new </a>
                    </div>
                </div>
                @if(count($bloodBanks)>0)
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-hover table-bordered center_table" id="my_table">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>District</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($bloodBanks as $bloodBank)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$bloodBank->name}}</td>
                                    <td>{{$bloodBank->contact}}</td>
                                    <td>{{$bloodBank->address}}</td>
                                    <td>{{$bloodBank->district}}</td>
                                    <td><i class="{{($bloodBank->status==1)? 'fa fa-check-circle text-success' : 'fa fa-times-circle text-danger'}}"></i></td>

                                    <td>
                                        {!! Form::open(array('route' => ['blood-bank.destroy',$bloodBank->id],'method'=>'DELETE','id'=>"deleteForm$bloodBank->id")) !!}
                                        <a href="{{route('blood-bank.edit',$bloodBank->id)}}" class="btn btn-xs btn-info"> <i class="fa fa-edit"></i> </a>
                                        <button type="button" class="btn btn-xs btn-danger" onclick='return deleteConfirm("deleteForm{{$bloodBank->id}}")'><i class="fa fa-trash"></i></button>
                                        {!! Form::close() !!}
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pull-right">
                        {{$bloodBanks->render()}}
                    </div>
                @else
                    <h2 class="text-danger text-center"> No data available here. </h2>
                @endif
            </div>
        </div>
    </div>



@endsection
