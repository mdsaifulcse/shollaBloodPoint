<?php

namespace App\Http\Controllers;

use App\Models\Frontend\FrontendMenu;
use Illuminate\Http\Request;
use Validator;

class FrontendMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData=FrontendMenu::orderBy('serial_num','ASC')->paginate(15);

        return view('backend.primaryInfo.frontend.menu.index',compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $max_serial=FrontendMenu::max('serial_num');
        //$permissions = Permission::where('system',1)->pluck('name','slug');
        return view('backend.primaryInfo.frontend.menu.create',compact('max_serial','permissions'));
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
            'name'=> 'required',
            'url'=> 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input['slug']=json_encode($request->slug);

        try{
            FrontendMenu::create($input);

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
     * @param  \App\Models\Frontend\FrontendMenu  $frontendMenu
     * @return \Illuminate\Http\Response
     */
    public function show(FrontendMenu $frontendMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontend\FrontendMenu  $frontendMenu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $max_serial=FrontendMenu::max('serial_num');
        $data=FrontendMenu::findOrFail($id);
        //$permissions = Permission::where('system',1)->pluck('name','slug');

        return view('backend.primaryInfo.frontend.menu.edit',compact('data','max_serial','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frontend\FrontendMenu  $frontendMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FrontendMenu $frontendMenu)
    {
        $input = $request->all();
        $data=FrontendMenu::findOrFail($request->id);

        $validator = Validator::make($input, [
            'name'    => 'required',
            'url'          => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input['slug']=json_encode($request->slug);
        try{
            $data->update($input);

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
     * @param  \App\Models\Frontend\FrontendMenu  $frontendMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=FrontendMenu::findOrFail($id);
        try{
            $data->delete();
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
        elseif($bug>0){
            return redirect()->back()->with('error','Some thing error found !');

        }
    }
}
