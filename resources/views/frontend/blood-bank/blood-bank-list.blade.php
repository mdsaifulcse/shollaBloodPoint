@extends('frontend.master')
@section('title')
    Blood Bank list Emergency | Sholla Blood Point Dhaka
@endsection

@section('content')
    <!-- Blood Bank list start -->
    <section>
        <div class="container">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="">
                        <div class="gradient-title">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h2><i class="fa fa-hospital-o text-danger" aria-hidden="true"></i> Importance Blood Bank List </h2>
                                </div>
                             
                            </div>
                        </div>

                        <div class="category-list-layout3">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-mb-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead class="my-bg">
                                            <th>Sl</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>District</th>
                                            <th>Contact</th>
                                            <th>Details</th>
                                            </thead>
                                            <tbody>
                                                 <?php $i=1?>
                                                @if(count($bloodBanks)>0)
                                                @foreach($bloodBanks as $bloodBank)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$bloodBank->name}}</td>
                                                <td>{{$bloodBank->category}}</td>
                                                <td>{{$bloodBank->district}}</td>
                                                <td>{{$bloodBank->contact}}</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#myModal{{$bloodBank->id}}">
                                                        Details <i class="fa fa-eye"></i>
                                                    </a>

                                                    <!-- Modal -->
                                                    <div id="myModal{{$bloodBank->id}}" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title"><i class="fa fa-tint blood"></i> {{$bloodBank->name}}</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered table-hover table-striped">
                                                                            <tr>
                                                                                <td>Name</td>
                                                                                <td>{{$bloodBank->name}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Contact Info</td>
                                                                                <td>{{$bloodBank->contact}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Address</td>
                                                                                <td>{{$bloodBank->address}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Category</td>
                                                                                <td>{{$bloodBank->category}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><i class="fa fa-link"></i> Web</td>
                                                                                <td><a href="{{$bloodBank->web}}" target="_blank"><span>{{$bloodBank->web}}</span></a> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Notes</td>
                                                                                <td>
                                                                                    <?php echo($bloodBank->notes)?>
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
                                            </tr>
                                             @endforeach
                                                    @else
                                                    <span class="text-danger"> No data available </span>
                                                    @endif
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

@endsection