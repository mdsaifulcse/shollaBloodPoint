<?php

namespace App\Http\Controllers;

use App\Models\ThanaUpazila;
use App\Models\Union;
use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;

class UnionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function loadUnionInfo($id){
        if($id!=null){
            $unions = Union::where('thana_upazila_id',$id)->pluck('union','id');
        }else{
            $unions = [];
        }
        return view('backend.register-member.load-union',compact('unions'));
    }

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
        $validator = Validator::make($input, [
            'union'=> "required|unique:unions,union",
            'thana_upazila_id'=>'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try{
            Union::create($input);

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
     * @param  \App\Models\Union  $union
     * @return \Illuminate\Http\Response
     */
    public function show($id) // thana / upazila primary key -------
    {
        $thana=ThanaUpazila::findOrFail($id);
        $unions=Union::leftJoin('thana_upazilas','unions.thana_upazila_id','=','thana_upazilas.id')
            ->select('unions.*','thana_upazilas.thana_upazila','thana_upazilas.id as thana_upazila_id')
            ->where('thana_upazila_id',$id)->orderBy('serial_num','ASC')->paginate(15);

        $max_serial=Union::where('thana_upazila_id',$id)->max('serial_num');
        return view('backend.setting.union.index',compact('unions','thana','max_serial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Union  $union
     * @return \Illuminate\Http\Response
     */
    public function edit(Union $union)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Union  $union
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'union'=> "required|unique:unions,union,$id",
            'thana_upazila_id'=>'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $unionInfo=Union::findOrFail($id);
        try{
            $unionInfo->update($input);

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
     * @param  \App\Models\Union  $union
     * @return \Illuminate\Http\Response
     */
    public function destroy(Union $union)
    {
        try{
            $union->delete();
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
