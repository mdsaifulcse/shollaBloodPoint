<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Validator;
use Session;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('title','All Notice List');
        $notices=Notice::orderBy('serial_num','DESC')->paginate(10);
        return view('backend.notice.index',compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Session::put('title','Create New Notice');
        $maxNum=Notice::max('serial_num');
        return view('backend.notice.create',compact('maxNum'));
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
            'photo'=> 'required',
            'details'=> 'required',
            'serial_num'=> 'required',
            'photo'=>'mimes:jpe,jpeg,png,gif|max:2048'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('photo')){
            //$phpo=$request->file('photo');
            $input['photo']=\MyHelper::photoUpload($request->file('photo'),'images/notice/',800);
        }

        $input['url']=\MyHelper::slugify($request->title);
        try{
            Notice::create($input);

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
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        Session::put('title','Update Old Notice Info');
        return view('backend.notice.edit',compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title'=> 'required',
            'details'=> 'required',
            'serial_num'=> 'required',
            'photo'=>'mimes:jpe,jpeg,png,gif|max:2048'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input['url']=\MyHelper::slugify($request->title);

        if ($request->hasFile('photo')){
            //$phpo=$request->file('photo');
            $input['photo']=\MyHelper::photoUpload($request->file('photo'),'images/notice/',800);
            if (file_exists($notice->photo)){
                unlink($notice->photo);
            }
        }


        try{
            $notice->update($input);

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
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice)
    {
        try{
            $notice->delete();
            if (file_exists($notice->photo)){
                unlink($notice->photo);
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
            return redirect()->back()->with('error','This Data is Used anywhere ! ');
        }
    }

}
