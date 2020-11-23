<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageViewController extends Controller
{
    public function myBloodPage($url){
        $pageInfo=Page::where('url',$url)->where('status',1)->first();
        if ($pageInfo==null){
            return redirect()->back();
        }
        return view('frontend.page.index',compact('pageInfo'));
    }
}
