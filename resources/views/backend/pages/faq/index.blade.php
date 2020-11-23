@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{URL::to('faq')}}"> Faqs</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    All Faqs
                    <div class="card-btn pull-right">
                        <a href="{{route('faq.create')}}" title="Add new faq" class="btn btn-primary btn-sm pull-right"> <i class="fa fa-plus-circle"></i> Add new </a>
                    </div>
                </div>
                @if(count($faqs)>0)
                <div class="card-body">
                    <table class="table table-striped table-hover table-bordered center_table" id="my_table">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        @foreach($faqs as $faq)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$faq->title}}</td>
                                <td><i class="{{($faq->status==1)? 'fa fa-check-circle text-success' : 'fa fa-times-circle text-danger'}}"></i></td>

                                <td>{{date('d-m-Y', strtotime($faq->created_at))}}</td>
                                <td>
                                    {!! Form::open(array('route' => ['faq.destroy',$faq->id],'method'=>'DELETE','id'=>"deleteForm$faq->id")) !!}
                                    <a href="{{route('faq.edit',$faq->id)}}" class="btn btn-xs btn-info"> <i class="fa fa-edit"></i> </a>
                                    <button type="button" class="btn btn-xs btn-danger" onclick='return deleteConfirm("deleteForm{{$faq->id}}")'><i class="fa fa-trash"></i></button>
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pull-right">
                    {{$faqs->render()}}
                </div>
                    @else
                    <h2 class="text-danger text-center"> No data available here. </h2>
                @endif
            </div>
        </div>
    </div>



@endsection
