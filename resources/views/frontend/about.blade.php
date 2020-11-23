@extends('frontend.master')
@section('title')
    Sholla Blood Point Contact Info | Sholla Blood Point
@endsection

@section('content')
    <!-- About Area Start Here -->
    <section class="s-space-bottom-full bg-accent-shadow-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb--xs">
                    <div class="gradient-wrapper">
                        <div class="gradient-title">
                            <h2> <img src="{{$primaryInfo->logo}}" width="50"> Information about blood point</h2>
                        </div>
                        <div class="about-us gradient-padding">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-8 col-xs-12">
                                    <img src="{{$primaryInfo->logo}}" alt="{{$primaryInfo->company_name}}" title="{{$primaryInfo->company_name}}" class="img-responsive img-thumbnail">
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-4 col-xs-12">
                                    <?php echo($primaryInfo->short_description)?>
                                </div>
                            </div>
                                <hr>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <?php echo($primaryInfo->description)?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End Here -->
@endsection


@section('script')

@endsection