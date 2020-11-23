@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{URL::to('menu')}}">Module</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    All Module
                    <div class="card-btn pull-right">
                        <a href="{{route('menu.create')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i> Add new </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-bordered center_table" id="my_table">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>URL</th>
                            <th>Sub Menu</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        @foreach($allData as $data)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><a href="{{route('menu.edit',$data->id)}}">{{$data->name}}</a></td>
                                <td><a href="{{URL::to($data->url)}}" target="_blank">{{URL::to($data->url)}}</a></td>
                                <td><a href="{{URL::to('sub-menu',$data->id)}}" class="label label-primary" style="color: #fff;">Sub Menu</a></td>
                                <td><i class="{{($data->status==1)? 'fa fa-check-circle text-success' : 'fa fa-times-circle'}}"></i></td>

                                <td>{{$data->created_at}}</td>
                                <td>
                                    {!! Form::open(array('route' => ['menu.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id")) !!}
                                    <a href="{{route('menu.edit',$data->id)}}" class="btn btn-xs btn-info"> <i class="fa fa-edit"></i> </a>
                                    <button type="button" class="btn btn-xs btn-danger" onclick='return deleteConfirm("deleteForm{{$data->id}}")'><i class="fa fa-trash"></i></button>
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pull-right">
                    {{$allData->render()}}
                </div>
            </div>
        </div>
    </div>



@endsection
