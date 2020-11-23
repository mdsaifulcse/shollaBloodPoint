<?php

namespace App\Http\Controllers;

use App\Models\EventType;
use Illuminate\Http\Request;
use Validator;

class EventTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventTypes=EventType::orderBy('serial_num','ASC')->paginate(15);
        $max_serial=EventType::max('serial_num');
        return view('backend.setting.event-type.index',compact('eventTypes','max_serial'));
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

        $input = $request->all();
        $validator = Validator::make($input, [
            'event_type' => 'required|unique:event_types,event_type',
            //'url'    => 'required|unique:divisions,url',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input['url']=\MyHelper::slugify($request->event_type);
        try{
            EventType::create($input);

            $bug=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Successfully Inserted');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventType  $eventType
     * @return \Illuminate\Http\Response
     */
    public function show(EventType $eventType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventType  $eventType
     * @return \Illuminate\Http\Response
     */
    public function edit(EventType $eventType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventType  $eventType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'event_type'=> "required|unique:event_types,event_type,$id",
            //'url'=> "required|unique:divisions,url,$id",
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $eventType=EventType::findOrFail($id);
        $input['url']=\MyHelper::slugify($request->event_type);
        try{
            $eventType->update($input);

            $bug=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Successfully Inserted');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventType  $eventTypetry{
    $eventType->delete();
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
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventType $eventType)
    {

    }
}
