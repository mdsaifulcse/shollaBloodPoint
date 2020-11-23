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
                @if(count($messages)>0)
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-hover table-bordered center_table" id="my_table">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Contact</th>
                                <th>Subject</th>
                                <th>Details</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($messages as $message)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$message->name}}</td>
                                    <td>{{$message->mobile}}</td>
                                    <td>{{$message->email}}</td>
                                    <td>{{$message->subject}}</td>

                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#myModal{{$message->id}}" class="btn btn-xs btn-info"> <i class="fa fa-eye"></i> </a>
                                        <!-- Modal -->
                                        <div id="myModal{{$message->id}}" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title"><i class="fa fa-tint text-danger"></i> {{$message->subject}}</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover table-striped">
                                                                <tr>
                                                                    <td>Name</td>
                                                                    <td>{{$message->name}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Contact Info</td>
                                                                    <td>{{$message->mobile}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Email</td>
                                                                    <td>{{$message->email}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Message</td>
                                                                    <td>
                                                                        {{$message->message}}
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>

                                    <td>
                                        {!! Form::open(array('url' =>'delete-user-message','method'=>'POST','id'=>"deleteForm$message->id")) !!}
                                        <input type="hidden" name="id" value="{{$message->id}}" >
                                        <button type="button" class="btn btn-xs btn-danger" onclick='return deleteConfirm("deleteForm{{$message->id}}")'><i class="fa fa-trash"></i></button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pull-right">
                        {{$messages->render()}}
                    </div>
                @else
                    <h2 class="text-danger text-center"> No data available here. </h2>
                @endif
            </div>
        </div>
    </div>



@endsection
