@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a> {{$data->company_name}} </a>
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

            <?php
                $color = ['yellow','green','red','blue'];
                $c=0;
                ?>
                @foreach($companyModules as $module)

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h6 class="text-muted m-b-0">{{$module->name}}</h6>
                                </div>
                                <div class="col-4 text-right">

                                        <i class="{{($module->icon_class!=null)?$module->icon_class:'fa fa-folder-o'}} f-28"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-c-{{$color[$c]}}">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <p class="text-white m-b-0"> {{$module->name}} </p>
                                </div>
                                <div class="col-3 text-right">
                                    <i class="feather icon-trending-up text-white f-16"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php
                        $c++;
                        if($c>3){
                            $c=0;
                        }
                    ?>
                @endforeach
            </div>

            <!-- project and updates end -->
        </div>
        <!-- [ page content ] end -->
    </div>

@endsection