<?php

namespace App\Http\Controllers;

use App\Models\Frontend\FrontendSubMenu;
use Illuminate\Http\Request;
use App\Models\Frontend\FrontendMenu;
use Validator;

class FrontendSubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //return $request;
        $input = $request->all();

        $validator = Validator::make($input, [
            'name'          => 'required',
            'url'    => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input['slug']=json_encode($request->slug);
        try{
            FrontendSubMenu::create($input);

            $bug=0;
        }catch(Exception $e){
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
     * @param  \App\Models\Frontend\FrontendSubMenu  $frontendSubMenu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allData=FrontendSubMenu::leftJoin('frontend_menus','frontend_sub_menus.menu_id','=','frontend_menus.id')
            ->select('frontend_sub_menus.*','frontend_menus.name as menu_name')->where('menu_id',$id)->orderBy('serial_num','ASC')->paginate(15);
        $menu=FrontendMenu::findOrFail($id);
        $max_serial=FrontendSubMenu::where('menu_id',$id)->max('serial_num');
        //$permissions = Permission::where('system',1)->pluck('name','slug');
        return view('backend.primaryInfo.frontend.menu.subMenu',compact('allData','max_serial','page','menu','permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontend\FrontendSubMenu  $frontendSubMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(FrontendSubMenu $frontendSubMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frontend\FrontendSubMenu  $frontendSubMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FrontendSubMenu $frontendSubMenu)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name'    => 'required',
            'url'          => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input['slug']=json_encode($request->slug);
        try{
            $frontendSubMenu->update($input);

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
     * @param  \App\Models\Frontend\FrontendSubMenu  $frontendSubMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrontendSubMenu $frontendSubMenu)
    {
        try{
            $frontendSubMenu->delete();
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
