@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{URL::to('gallery')}}">
                Founder Members List
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
                            <a  href="{{URL::to('/founder-members/create')}}" class="btn btn-primary btn-sm" title="Add new founder member" > <i class="fa fa-plus"></i> Add New</a>

                        </div>
                        <h4 class="card-title">All Founder Members</h4>
                    </div>
                    <div class="card-body">
                        <!--  -->
                        <div class="view_branch_set  table-responsive">

                            @if(count($founderMembers)>0)
                                <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                    <thead>
                                    <tr>
                                        <th width="1%;">Sl</th>
                                        <th width="3%;">Name</th>
                                        <th width="1.5%;">Designation</th>
                                        <th width="2%;">Blood Group</th>
                                        <th width="1%;">Photo</th>
                                        <th width="1%;">Status</th>
                                        <th width="1%;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; ?>

                                    @foreach($founderMembers as $founderMember)
                                        <tr class="odd gradeX">
                                            <td>{{$i++}}</td>
                                            <td>{{$founderMember->name}}</td>
                                            <td>{{$founderMember->designation}}</td>
                                            <td>{{$founderMember->fmBloodGroup->name}}</td>
                                            <td>
                                                @if(!empty($founderMember->photo))
                                                    <img src="{{asset($founderMember->photo)}}" width="50">
                                                @else
                                                    <span>No Image</span>
                                                @endif
                                            </td>
                                            <td class="text-dark">
                                                @if($founderMember->status==1)
                                                    <a title="Active"><i class="fa fa-check-circle fa-2x text-primary"></i></a>
                                                @else
                                                    <a title="Inactive" ><i class="fa fa-times fa-2x text-danger"></i></a>
                                                @endif
                                            </td>
                                            <td>

                                            <!-- delete section -->
                                                {{Form::open(array('route'=>['founder-members.destroy',$founderMember->id],'method'=>'DELETE','class'=>'deleteForm','id'=>"deleteForm$founderMember->id"))}}
                                                <a  href="{{URL::to('/founder-members/'.$founderMember->id.'/edit')}}" class="btn btn-warning btn-xs" title="Click here to edit this" > <i class="fa fa-edit"></i></a>
                                                <button type="button" class="btn btn-danger btn-xs" onclick='return deleteConfirm("deleteForm{{$founderMember->id}}")'><i class="fa fa-trash"></i></button>
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
                                {{$founderMembers->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end #content -->
@endsection
