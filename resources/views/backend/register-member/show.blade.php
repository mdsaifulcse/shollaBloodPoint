@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{URL::to('register-member')}}">Edit Member</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row ">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header card-info">
                    <i class="fa fa-edit"></i> Edit Member Info
                    <div class="card-btn pull-right">
                        <a href="{{URL::to('approve-member')}}" title="View All Waiting member" class="btn btn-warning btn-sm" > <i class="fa fa-list"></i> Waiting Members </a>
                        <a href="{{URL::to('member-register')}}" title="View All Members" class="btn btn-primary btn-sm" > <i class="fa fa-list"></i> All Members</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-10  col-md-10  com-sm-12">
                            <h4><u>{{$member->name}}</u> - Total blood donation : <strong class="badge">{{$numberOfDonation}}</strong> times</h4>
                            <table class="table table-hover table-border-style table-bordered table-striped">
                                <tr>
                                    <td>Member Photo</td>
                                    <td>
                                        @if(!empty($member->photo))
                                            <img src="{{asset($member->photo)}}" title="Member photo" width="80" height="70">
                                            @else
                                            <span> No Image</span>
                                            @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>{{$member->name}}</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>{{$member->gender}}</td>
                                </tr>
                                <tr>
                                    <td>Father Name</td>
                                    <td>{{$member->father_name}}</td>
                                </tr>
                                <tr>
                                    <td>Mobile</td>
                                    <td>{{$member->phone_number}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$member->email}}</td>
                                </tr>
                                <tr>
                                <td>Member Type</td>
                                    <td>
                                        @if($member->member_type==1)
                                            <span class="btn btn-info btn-sm">Donate Blood</span>
                                        @elseif($member->member_type==2)
                                            <span class="btn btn-info btn-sm">A Voluntary Member</span>
                                            @elseif($member->member_type==3)
                                            <span class="btn btn-success btn-sm">Founder Member</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Blood Group</td>
                                    <td>{{$member->memberBloodGroup->name}}</td>
                                </tr>
                                <tr>
                                    <td><span class="text-danger">Last Date of Blood Donation</span></td>
                                    <td class="text-danger"><span>{{date("F jS, Y",strtotime($member->last_blood_donation))}}({{$member->last_blood_donation->diffForHumans()
}})</span></td>
                                </tr>
                                <tr>
                                    <td>Donation Status</td>
                                    <td>
                                        @if($member->donation_status==1)
                                            <span class="">Donate Blood</span>
                                        @else
                                            <span class="">If Urgent, I can donate Blood</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>{{date("F jS, Y",strtotime($member->birthdate))}}</td>
                                </tr>
                                <tr class="bg-info">
                                    <td>Address</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>District </td>
                                    <td>{{$member->memberDistrict->district}} </td>
                                </tr>
                                <tr>
                                    <td>Thana / Upazila </td>
                                    <td>{{$member->memberThanaUpazila->thana_upazila}} </td>
                                </tr>
                                <tr>
                                    <td>Union </td>
                                    <td>{{$member->memberUnion->union}} </td>
                                </tr>
                                <tr>
                                    <td>Village</td>
                                    <td>{{$member->memberVillage->village}} </td>
                                </tr>
                                <tr>
                                    <td>Facebook ID</td>
                                    <td>{{$member->facebook_id}} </td>
                                </tr>
                                <tr>
                                    <td>Member Status</td>
                                    <td>
                                        @if($member->status==1)
                                            <span class="btn btn-success btn-sm">Active</span>
                                        @else
                                            <span class="btn btn-danger btn-sm">Inactive</span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div><!--end col-->
                    </div>
                </div><!--  card-body -->
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).on('change','#loadThana',function(){
            var id = $(this).val();
            console.log(id)
            $('#thanaUpazila').load('{{URL::to("load-thana")}}/'+id);
        });
        $('#loadBranches')
    </script>
@endsection





