@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{URL::to('#')}}"> Blood Receivers Lists</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header card-info">
                    Blood Receivers Lists

                </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="allReceivers" class="table table-striped table-hover table-bordered center_table">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Donor Name</th>
                                <th>Donor Mobile</th>
                                <th>Patient</th>
                                <th>Mobile</th>
                                <th>Disease</th>
                                <th>Hospital</th>
                                <th>Last Donation</th>
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
        $('#allReceivers').DataTable( {
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: '{{url('/show-all-blood-receivers')}}',
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                { data: 'name',name:'users.name'},
                { data: 'phone_number',name:'users.phone_number'},
                { data: 'patient_name',name:'blood_donates.patient_name'},
                { data: 'patient_mobile',name:'blood_donates.patient_mobile'},
                { data: 'patient_diseases',name:'blood_donates.patient_diseases'},
                { data: 'hospital',name:'blood_donates.hospital'},
                { data: 'last_blood_donation',name:'blood_donates.last_blood_donation'},
            ]
        });

    });
</script>
@endsection