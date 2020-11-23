<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CacheClearController extends Controller
{
    //Clear Cache facade value:
    public function clearCache(){
        Artisan::call('cache:clear');
        return redirect('/')->with('success','Successfully Clear Cache facade value.');
    }

    //Clear View cache:
    public function viewClear(){
        Artisan::call('view:clear');
        return redirect('/')->with('success','Successfully Clear View cache.');
    }
    //Clear Route cache:
    public function routeCache(){
        Artisan::call('route:cache');
        return redirect('/')->with('success','Successfully Clear Route cache.');
    }
    //Seed:
    public function seed(){
        Artisan::call('db:seed');
        return redirect('/')->with('success','Successfully Seeding.');
    }
    public function migrate(){
        Artisan::call('migrate');
        return redirect('/')->with('success','Successfully migrate.');
    }
}
