@extends('frontend.master')
@section('title')
    Blood Donors list by this {{$bloodGroup->name}} | Sholla Blood Point Dhaka
@endsection

@section('content')
    <!-- Blood Bank list start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="">
                        <div class="gradient-title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">
                                    <h2><i class="fa fa-tint blood" aria-hidden="true"></i> <strong> <em>{{$bloodGroup->name}}</em> </strong> Blood Donors list </h2>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2">
                                    <div class="layout-switcher">
                                        <ul>
                                            <li>
                                                {{--<a href="{{URL::to('/search-blood-donor.html')}}">--}}
                                                    {{--<span class="text-primary pull-right"><i class="fa fa-user-md" aria-hidden="true"></i> Search Blood Donor</span>--}}
                                                {{--</a>--}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="category-list-layout3">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-mb-12">
                                    <div class="table-responsive">
                                        <table id="donorsByGroup" class="table table-striped table-hover table-bordered center_table">
                                            <thead>
                                            <tr class="my-bg">
                                                <th>Name</th>
                                                <th>Blood Group</th>
                                                <th>Last Donation</th>
                                                <th>District</th>
                                                <th>Thana</th>
                                                <th>Union</th>
                                                <th>Village</th>
                                                <th>Admin Mobile</th>
                                                <th>Admin Name</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>

                                </div><!-- end col-->
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- Blood bank lis end-->
@endsection
@section('script')
    <script type="text/javascript">
        $(function() {
            $('#donorsByGroup').DataTable( {
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: "{{url('/active-donors-by-group/'.$bloodGroup->id)}}",
                columns: [
                    { data: 'name',name:'users.name'},
                    { data: 'blood_group',name:'blood_groups.name'},
                    { data: 'last_blood_donation',name:'members.last_blood_donation'},
                    { data: 'district',name:'districts.district'},
                    { data: 'thana_upazila',name:'thana_upazilas.thana_upazila'},
                    { data: 'union',name:'unions.union'},
                    { data: 'village',name:'villages.village'},
                    { data: 'mobile',name:'blood_groups.mobile'},
                    { data: 'admin_name',name:'blood_groups.admin_name'},

                ]
            });

        });
    </script>
@endsection