@extends('frontend.master')
@section('title')
    Founder Members of Sholla Blood Point Dhaka
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
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h2><i class="fa fa-tint blood" aria-hidden="true"></i> Sholla Blood Point Founder Members </h2>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="category-list-layout3">

                            <div class="row">
                                @if(count($founderMembers)>0)
                                    @foreach($founderMembers as $founderMember)
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="founder-member">
                                            <img src="{{asset($founderMember->photo)}}" alt="{{$founderMember->name}}" class="img-responsive img-circle center-block">
                                            <div class="founder-member-info">
                                                <h4><span> {{$founderMember->name}}</span></h4>
                                                <h4><span> {{$founderMember->designation}}</span></h4>
                                                <h4>Blood Group : <span> {{$founderMember->fmBloodGroup->name}}</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    @else
                                    <h1 class="text-center text-danger"> No Founder Member</h1>
                                @endif
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- Blood bank lis end-->
@endsection