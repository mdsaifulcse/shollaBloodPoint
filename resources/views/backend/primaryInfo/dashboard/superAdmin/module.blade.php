@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href='{{URL::to("company-dashboard/$company->id")}}'> {{$company->company_name}} </a>
        </li>
        <li class="breadcrumb-item">
            <a> {{$module->name}} </a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="row">
                <!-- amount start -->
                <div class="col-md-6 col-xl-4">
                    <div class="card amount-card o-hidden">
                        <div class="card-block">
                            <h2 class="f-w-400">$23,567</h2>
                            <p class="text-muted f-w-600 f-16"><span class="text-c-blue">Amount</span> Processed</p>
                        </div>
                        <div id="amount-processed" style="height:50px"></div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card amount-card o-hidden">
                        <div class="card-block">
                            <h2 class="f-w-400">$14,552</h2>
                            <p class="text-muted f-w-600 f-16"><span class="text-c-green">Amount</span> Spent</p>
                        </div>
                        <div id="amount-spent" style="height:50px"></div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-4">
                    <div class="card amount-card o-hidden">
                        <div class="card-block">
                            <h2 class="f-w-400">$31,156</h2>
                            <p class="text-muted f-w-600 f-16"><span class="text-c-yellow">Profit</span> Processed
                            </p>
                        </div>
                        <div id="profit-processed" style="height:50px"></div>
                    </div>
                </div>
                <!-- amount end -->
                <!-- page statustic card end -->

                <div class="col-xl-8 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Sales Analytics</h5>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                    <li><i class="feather icon-maximize full-card"></i></li>
                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                    <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                    <li><i class="feather icon-trash close-card"></i></li>
                                    <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block">
                            <div id="sales-analytics" style="height: 360px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <h3>20500</h3>
                            <p class="text-muted">Site Analysis</p>
                            <div id="seo-anlytics1" style="height:50px"></div>
                        </div>
                    </div>
                    <div class="card bg-c-blue text-white widget-visitor-card">
                        <div class="card-block-small text-center">
                            <h2>5,678</h2>
                            <h6>Daily visitor</h6>
                            <i class="feather icon-file-text"></i>
                        </div>
                    </div>
                    <div class="card bg-c-yellow text-white widget-visitor-card">
                        <div class="card-block-small text-center">
                            <h2>5,678</h2>
                            <h6>Last month visitor</h6>
                            <i class="feather icon-award"></i>
                        </div>
                    </div>
                </div>




            </div>

            <!-- project and updates end -->
        </div>
        <!-- [ page content ] end -->
    </div>

@endsection