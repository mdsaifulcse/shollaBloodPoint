<?php

namespace App\Providers;

use App\Models\CompanyList;
use App\Models\CompanyModule;
use App\Models\MebMenu;
use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Support\ServiceProvider;
use Sessinu;
use App\Models\Suon;
use Illuminate\Support\Facades\Auth;
use View;
class MenuProvider extends ServiceProvider
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
                'layouts.header_sidebar'
            ],
            function ($view){
                $memus=Menu::orderBy('serial_num','ASC')->where(['status'=>1,'type'=>2])->get();
                $view->with(['memus'=>$memus]);
            }
        );

//        view()->composer([
//         'layouts.header_sidebar',
//         'layouts.subMenu',
//        ],function($view){
//            $subMenu =[];
//            $menus =[];
//            if(Session::has('menu')){
//                $id = Session::get('menu');
//                $subMenu = SubMenu::where(['status'=>1,'fk_menu_id'=>$id])->orderBy('serial_num','ASC')->get();
//            }
//            $allCompany = CompanyList::where(['status'=>1])->get();
//            if(!Auth::user()->isRole('developer') and Auth::user()->company_id!=null){
//                $menus = CompanyModule::leftJoin('menu','module_id','menu.id')->select('menu.*')->where('company_id',Auth::user()->company_id)->where('menu.type',1)->get();
//            }else{
//                $menus = Menu::where(['status'=>1,'type'=>2])->get();
//            }
//         $view->with(['menus'=>$menus,'subMenu'=>$subMenu,'allCompany'=>$allCompany]);
//        });
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
