<?php

namespace App\Providers;

use App\Models\Frontend\FrontendMenu;
use App\Models\Member;
use App\Models\Notice;
use App\Models\PrimaryInfo;
use App\Models\Slider;
use Illuminate\Support\ServiceProvider;
use View;

class BloodPointServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            [
                'frontend.include.header',
                'frontend.include.footer',
            ],
            function ($view){
                $menus=FrontendMenu::with('frontendSubMenu')->orderBy('serial_num','ASC')->where('status',1)->get();
                $notices=Notice::orderBy('serial_num','DESC')->where('status',1)->take(3)->get();
                $last5notices=Notice::orderBy('serial_num','DESC')->where('status',1)->skip(3)->take(5)->get();
                $view->with(['menus'=>$menus,'notices'=>$notices,'last5notices'=>$last5notices]);
            }
        );
        View::composer(
            [
                'frontend.home.index',
                'frontend.include.header',
                'frontend.include.footer',
                'frontend.master',
                'frontend.about',
                'frontend.contact',
            ],
            function ($view){
                $primaryInfo=PrimaryInfo::first();
                //$view->with('menus',$menus)->with('primaryInfo',$primaryInfo);
                $view->with(['primaryInfo'=>$primaryInfo,]);
            }
        );
        // slider -------------
        View::composer(
            [
                'frontend.home.index',

            ],
            function ($view){
                $sliders=Slider::orderBy('serial_num','ASC')->where('status',1)->get();
                //$view->with('menus',$menus)->with('primaryInfo',$primaryInfo);
                $view->with(['sliders'=>$sliders]);
            }
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
