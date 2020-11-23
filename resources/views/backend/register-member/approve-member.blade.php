@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{URL::to('member-register')}}"> Member Registration</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    New member waiting for approval
                    <div class="card-btn pull-right">
                        <a href="{{route('member-register.create')}}" title="Add new member" class="btn btn-primary btn-sm pull-right"> <i class="fa fa-plus-circle"></i> Add new </a>
                    </div>
                </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table  class="table table-striped table-hover table-bordered center_table">
                            @if(count($newMembers)>0)
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Blood Group</th>
                                <th>Member Type </th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                                <?php $i=1?>
                                @foreach($newMembers as $newMember)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$newMember->userData->name}}</td>
                                <td>{{$newMember->userData->phone_number}}</td>
                                <td>{{$newMember->userData->email}}</td>
                                <td>{{$newMember->memberBloodGroup->name}}</td>
                                <td>
                                @if($newMember->member_type==1)
                                    <span class="text-success">Blood Donor </span>
                                    @else
                                        <span class="text-success">I want to be a voluntary member </span>
                                    @endif
                                </td>
                                <td>
                                    {!! Form::open(array('route' => ['member-register.destroy',$newMember->id],'method'=>'DELETE','id'=>"deleteForm$newMember->id")) !!}
                                    <a href="{{url('member-register/'.$newMember->id)}}" class="btn btn-xs btn-info" title="Click here to view all info about this member"> <i class="fa fa-eye"></i> </a>
                                    <a href="{{url('approve-new-member/'.$newMember->id)}}" class="btn btn-xs btn-success" title="Click here to approve this member" onclick="return confirm('Are you sure to approve this member ?')"> <i class="fa fa-check-square-o" aria-hidden="true"></i> </a>
                                    <button type="button" class="btn btn-xs btn-danger" onclick='return deleteConfirm("deleteForm{{$newMember->id}}")'><i class="fa fa-trash"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                                @else
                                <h3 class="text-center text-danger">No new member request available here</h3>
                            @endif

                            </tbody>
                        </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

@endsection