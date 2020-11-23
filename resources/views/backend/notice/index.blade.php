@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{URL::to('notice')}}"> Notice</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    All Notices
                    <div class="card-btn pull-right">
                        <a href="{{route('notice.create')}}" title="Add new notice" class="btn btn-primary btn-sm pull-right"> <i class="fa fa-plus-circle"></i> Add new </a>
                    </div>
                </div>
                @if(count($notices)>0)
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-hover table-bordered center_table" id="my_table">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Photo</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($notices as $notice)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$notice->title}}</td>
                                    <td>
                                        @if(!empty($notice->photo))
                                        <img src="{{asset($notice->photo)}}" width="80" height="80">
                                            @else
                                            <span class="text-danger">No Image</span>
                                        @endif
                                    </td>
                                    <td><i class="{{($notice->status==1)? 'fa fa-check-circle text-success' : 'fa fa-times-circle text-danger'}}"></i></td>

                                    <td>{{date('d-m-Y', strtotime($notice->created_at))}}</td>
                                    <td>
                                        {!! Form::open(array('route' => ['notice.destroy',$notice->id],'method'=>'DELETE','id'=>"deleteForm$notice->id")) !!}
                                        <a href="{{route('notice.edit',$notice->id)}}" class="btn btn-xs btn-info"> <i class="fa fa-edit"></i> </a>
                                        <button type="button" class="btn btn-xs btn-danger" onclick='return deleteConfirm("deleteForm{{$notice->id}}")'><i class="fa fa-trash"></i></button>
                                        {!! Form::close() !!}
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pull-right">
                        {{$notices->render()}}
                    </div>
                @else
                    <h2 class="text-danger text-center"> No data available here. </h2>
                @endif
            </div>
        </div>
    </div>



@endsection
