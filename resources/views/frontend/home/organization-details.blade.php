@extends('frontend.master')

@section('title')
    {{$organizationInfo->compoany_name}} | Sholla Blood Point
@endsection()

@section('content')
    <section class="">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="">
                        <div class="gradient-title">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h2> <img src="{{asset($organizationInfo->logo)}}" width="40" alt="{{$organizationInfo->company_name}}" title="{{$organizationInfo->company_name}}"> About {{$organizationInfo->company_name}} </h2>
                                </div>
                            </div>
                        </div>

                        <div class="category-list-layout3 page">
                            <div class="login-form">
                                <div class="row">
                                    <div class="col-lg-10 col-md-10 col-sm-6 col-xs-12 text-justify col-lg-offset-1 col-md-offset-1">
                                    <img src="{{asset($organizationInfo->logo)}}" class="img-responsive img-thumbnail img-circle img-responsive center-block">
                                    <?php echo($organizationInfo->short_description)?>
                                    </div>

                                    <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 text-justify">
                                        <hr>
                                        <?php echo($organizationInfo->description)?>
                                    </div>
                                </div> <!-- end row-->
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- Blood Request end-->
@endsection