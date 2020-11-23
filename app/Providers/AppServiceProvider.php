<?php

namespace App\Providers;

use App\Models\BloodGroup;
use App\Models\District;
use App\Models\PresidentSpeech;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            [
                'frontend.blood-request.request-for-blood'
            ],
            function ($view){
                $districts=District::orderBy('serial_num','ASC')->pluck('district','id');
                $bloodGroups=BloodGroup::orderBy('serial_num','ASC')->pluck('name','id');
                $view->with(['districts'=>$districts,'bloodGroups'=>$bloodGroups]);
            }
        );
        View::composer(
            [
                'frontend.home.index'
            ],
            function ($view){
                $speech=PresidentSpeech::orderBy('id','desc')->first();
                $view->with(['speech'=>$speech]);
            }
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
