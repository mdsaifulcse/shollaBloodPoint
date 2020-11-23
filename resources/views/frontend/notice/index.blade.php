@extends('frontend.master')

@section('title')
    {{$notice->title}} | Sholla Blood Point
@endsection()

@section('content')
    <section class="">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="">
                        <div class="gradient-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <h2><i class="fa fa-tint blood"></i> {{$notice->title}} </h2>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="layout-switcher">
                                        <ul>
                                            <li>
                                                <a href="{{URL::to('/blood-request-list.html')}}">
                                                    <span class="text-primary pull-right"><i class="fa fa-link" aria-hidden="true"></i> Blood Request List</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="category-list-layout3 page">
                            <div class="login-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-justify">
                                    <?php echo($notice->details)?>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-mb-12">
                                        <img src="{{asset($notice->photo)}}" class="img-responsive img-thumbnail img-responsive">
                                    </div>
                                </div> <!-- end row-->
                                <hr>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- Blood Request end-->
@endsection