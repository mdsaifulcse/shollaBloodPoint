<?php

namespace App\Http\Controllers;

use App\Models\EventType;
use App\Models\SubEventType;
use Illuminate\Http\Request;
use Validator;

class SubEventTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
            'sub_event_type'=> 'required|unique:sub_event_types,sub_event_type',
            'event_type_id'=> 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input['url']=\MyHelper::slugify($request->sub_event_type);
        try{
            SubEventType::create($input);

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
     * @param  \App\Models\SubEventType  $subEventType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $subEventTypes=SubEventType::leftJoin('event_types','sub_event_types.event_type_id','=','event_types.id')
             ->select('sub_event_types.*','event_types.event_type')
            ->where('event_type_id',$id)->orderBy('serial_num','ASC')->paginate(15);
         $eventType=EventType::findOrFail($id);
        $max_serial=SubEventType::where('event_type_id',$id)->max('serial_num');
        return view('backend.setting.event-type.sub-event-type',compact('subEventTypes','eventType','max_serial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubEventType  $subEventType
     * @return \Illuminate\Http\Response
     */
    public function edit(SubEventType $subEventType)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubEventType  $subEventType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'sub_event_type'=> "required|unique:sub_event_types,sub_event_type,$id",
            'event_type_id'=> 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $division=SubEventType::findOrFail($id);
        $input['url']=\MyHelper::slugify($request->sub_event_type);
        try{
            $division->update($input);

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
     * @param  \App\Models\SubEventType  $subEventType
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubEventType $subEventType)
    {
        try{
            $subEventType->delete();
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
