<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\User;
use Illuminate\Http\Request;
use Validator;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages=Page::orderBy('serial_num','ASC')->paginate(10);
        return view('backend.pages.page.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maxNum=Page::max('serial_num');
        return view('backend.pages.page.create',compact('maxNum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title'=> 'required',
            'photo'=> 'required|max:2048',
            'short_description'=>'required',
            'details'=> 'required',
            'serial_num'=> 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('photo')){
            //$phpo=$request->file('photo');
            $input['photo']=\MyHelper::photoUpload($request->file('photo'),'images/page/');
        }

        $input['url']=\MyHelper::slugify($request->title);
        try{
            Page::create($input);

            $bug=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Successfully Inserted');
        }else{
            return redirect()->back()->with('error',$bug);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('backend.pages.page.edit',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title'=> 'required',
            'short_description'=>'required',
            'details'=> 'required',
            'serial_num'=> 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //$input['url']=\MyHelper::slugify($request->title);

        if ($request->hasFile('photo')){
            //$phpo=$request->file('photo');
            $input['photo']=\MyHelper::photoUpload($request->file('photo'),'images/page/');
            if (file_exists($page->photo)){
                unlink($page->photo);
            }
        }


        try{
            $page->update($input);

            $bug=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Successfully Update');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        try{
            $page->delete();
            if (file_exists($page->photo)){
                unlink($page->photo);
            }
            $bug=0;
            $error=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
            $error=$e->errorInfo[2];
        }
        if($bug==0){
            return redirect()->back()->with('success','Successfully Deleted!');
        }elseif($bug==1451){
            return redirect()->back()->with('error','This data is already used another table ! ');

        }
        elseif($bug>0){
            return redirect()->back()->with('error','Some thing error found !');
        }
    }
}
