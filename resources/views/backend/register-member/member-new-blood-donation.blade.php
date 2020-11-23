@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{URL::to('member-register')}}"> Member Blood Donation Details</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    New Blood Donation Details
                    <div class="card-btn pull-right">

                    </div>
                </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table  class="table table-striped table-hover table-bordered center_table">
                            @if(count($newBloodDonation)>0)
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Donor</th>
                                <th>Donor Mobile</th>
                                <th>Patient Name</th>
                                <th>Disease</th>
                                <th>Donation Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                                <?php $i=1?>
                                @foreach($newBloodDonation as $bloodDonation)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$bloodDonation->userData->name}}</td>
                                <td>{{$bloodDonation->userData->phone_number}}</td>
                                <td>{{$bloodDonation->patient_name}}</td>
                                <td>{{$bloodDonation->patient_diseases}}</td>
                                <td>{{date('d-M-Y',strtotime($bloodDonation->last_blood_donation))}}</td>
                                <td>

                                    <a href="{{url('/save-donation-record/'.$bloodDonation->id)}}" class="btn btn-xs btn-success" title="Click here to save blood donation record" onclick="return confirm('Are you sure to Save this ? You could not Undo this !')"> <i class="fa fa-check-square-o" aria-hidden="true"></i> </a>
                                    <a href="{{url('/delete-blood-donation/'.$bloodDonation->id)}}" class="btn btn-xs btn-danger" title="Click here to delete fake blood donation" onclick="return confirm('Are you sure to Delete this ? You could not revert this !')"> <i class="fa fa-trash"></i> </a>

                                </td>
                            </tr>
                            @endforeach
                                @else
                                <h3 class="text-center text-danger">No new blood donation info</h3>
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