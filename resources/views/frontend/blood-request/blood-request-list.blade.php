@extends('frontend.master')
@section('title')
    Emergency Blood Request List | Sholla Blood Point
@endsection

@section('content')
    <!-- Doner List start -->
    <section class="service-layout1 bg-accent s-space-custom2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="gradient-wrapper item-mb">
                        <div class="gradient-title">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <h2><i class="fa fa-tint blood"></i> Current Blood Request List</h2>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                    <div class="layout-switcher">
                                        <ul>
                                            <li>
                                                <a href="blood-request.html">
                                                    <span class="text-primary pull-right"><i class="fa fa-link" aria-hidden="true"></i> Click For Blood Request</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="category-list-layout3 gradient-padding zoom-gallery">
                            <div class="row">
                                @if(count($bloodRequests)>0)
                                    @foreach($bloodRequests as $request)
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-mb-12">
                                    <div class="product-box item-mb zoom-gallery">
                                        <div class="item-content">
                                            <h3 class="long-title">
                                                Required Blood Group : <strong class="text-danger">{{$request->requiredBloodGroup->name}}</strong>
                                            </h3>
                                            <ul class="upload-info">
                                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i><strong>Donation Date :</strong> <u>{{date('d-M-Y',strtotime($request->date_of_donation))}}</u></li>

                                                <li class="tag-ctg"><i class="fa fa-medkit" aria-hidden="true"></i><strong>Amount :</strong> {{$request->amount}} Unit(s)/Bag(s)  </li>

                                                <li class="tag-ctg">
                                                    <i class="fa fa-phone" aria-hidden="true"></i><strong>Contact Number:</strong> {{$request->requiredBloodGroup->mobile}}  </li>
                                            </ul>
                                            <ul class="upload-info">

                                                <li class="place"><i class="fa fa-bed" aria-hidden="true"></i><strong> Disease : </strong>
                                                    {{$request->disease}}
                                                </li>
                                                <li class="place"><i class="fa fa-hospital-o" aria-hidden="true"></i><strong> Patient's Location: </strong>
                                                    {{$request->patient_location}}
                                                </li>
                                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i><strong> District : </strong>
                                                    {{$request->bloodRequiredDistrict->district}}
                                                </li>
                                            </ul>
                                            <ul class="upload-info">

                                                <li class="place"><i class="fa fa-user-md" aria-hidden="true"></i><strong>Blood Request By : </strong>
                                                    {{$request->name}}
                                                </li>
                                            </ul>
                                            <strong>Details :</strong><p>
                                                {{$request->message}}
                                            </p>

                                        </div>
                                    </div>
                                </div> <!-- end col-->
                                    @endforeach
                                    @else
                                    <span class="text-danger text-center"> No Data available here </span>
                                    @endif

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Blood request list end-->

@endsection


@section('script')

@endsection