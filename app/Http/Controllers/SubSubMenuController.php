<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\SubSubMenu;
use Validator;
use Yajra\Acl\Models\Permission;

class SubSubMenuController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
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
         $input = $request->all();
        if(isset($input['page'])){
            $page=Page::select('name')->where('link',$input['page'])->first();
            $input['name']=$page['name'];
            $input['url']="page/".$input['page'];

        }
        $validator = Validator::make($input, [   
                    'name'          => 'required',
                    'url'    => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
        $input['slug']=json_encode($request->slug);
        try{
                SubSubMenu::create($input);

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allData=SubSubMenu::leftJoin('sub_menu','sub_sub_menu.fk_sub_menu_id','=','sub_menu.id')->leftJoin('menu','sub_menu.fk_menu_id','=','menu.id')->select('sub_sub_menu.*','menu.name as menu_name','sub_menu.name as sub_menu_name')->where('sub_sub_menu.fk_sub_menu_id',$id)->orderBy('sub_sub_menu.serial_num','ASC')->paginate(15);
        $subMenu=SubMenu::findOrFail($id);
        $menu=Menu::findOrFail($subMenu->fk_menu_id);
        $max_serial=SubSubMenu::where('fk_sub_menu_id',$id)->max('serial_num');
        //$permissions = Permission::where('system',1)->pluck('name','slug');
        return view('backend.primaryInfo.menu.subSubMenu',compact('allData','max_serial','page','menu','subMenu','permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $input = $request->all();
        $data=SubSubMenu::findOrFail($request->id);
        
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
            return redirect()->back()->with('success','Successfully Inserted');
            }else{
                return redirect()->back()->with('error','Something Error Found ! ');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data=SubSubMenu::findOrFail($id);
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
