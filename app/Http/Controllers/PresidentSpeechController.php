<?php

namespace App\Http\Controllers;

use App\Models\PresidentSpeech;
use Illuminate\Http\Request;
use Validator;
use Session;

class PresidentSpeechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('title','Update president speech');
        $speech=PresidentSpeech::orderBy('id','desc')->first();
        return view('backend.speech.edit',compact('speech'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PresidentSpeech  $presidentSpeech
     * @return \Illuminate\Http\Response
     */
    public function show(PresidentSpeech $presidentSpeech)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PresidentSpeech  $presidentSpeech
     * @return \Illuminate\Http\Response
     */
    public function edit(PresidentSpeech $presidentSpeech)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PresidentSpeech  $presidentSpeech
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PresidentSpeech $presidentSpeech)
    {
        //return $request;
        $input = $request->all();
        $validator = Validator::make($input, [
            'title'=> 'required',
            'short'=> 'required|max:800',
            'details'=> 'required|max:2000',
            'serial_num'=> 'required',
            'photo'=>'mimes:jpe,jpeg,png,gif|max:1500'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input['url']=\MyHelper::slugify($request->title);

        if ($request->hasFile('photo')){
            //$phpo=$request->file('photo');
            $input['photo']=\MyHelper::photoUpload($request->file('photo'),'images/speech/',250);
            if (file_exists($presidentSpeech->photo)){
                unlink($presidentSpeech->photo);
            }
        }


        try{
            $presidentSpeech->update($input);

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
     * @param  \App\Models\PresidentSpeech  $presidentSpeech
     * @return \Illuminate\Http\Response
     */
    public function destroy(PresidentSpeech $presidentSpeech)
    {
        //
    }
}
