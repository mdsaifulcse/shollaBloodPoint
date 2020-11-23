@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{URL::to('#')}}"> Founder Members</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    All Founder Members List
                    <div class="card-btn pull-right">
                        <a href="{{route('member-register.create')}}" title="Add new member" class="btn btn-primary btn-sm pull-right"> <i class="fa fa-plus-circle"></i> Add new </a>
                    </div>
                </div>
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table id="allFounderMembersList" class="table table-striped table-hover table-bordered center_table">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Blood Group</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
<script type="text/javascript">
    $(function() {
        $('#allFounderMembersList').DataTable( {
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: '{{url('/all-founder-member-show')}}',
            columns: [
                { data: 'id',name:'id'},
                { data: 'name',name:'users.name'},
                { data: 'phone_number',name:'users.phone_number'},
                { data: 'email',name:'users.email'},
                { data: 'blood_group',name:'blood_groups.name'},
                { data: 'action'}
            ]
        });

    });
</script>
@endsection