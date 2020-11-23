<?php

namespace App\Http\Controllers;

use App\Models\BloodBank;
use Illuminate\Http\Request;
use Validator;
use Session;

class BloodBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('title','All Blood Bank list');
        $bloodBanks=BloodBank::orderBy('serial_num','ASC')->paginate(15);
        return view('backend.blood-bank.index',compact('bloodBanks','max_serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Session::put('title','Create Blood Bank');
        $maxNum =BloodBank::max('serial_num');
        return view('backend.blood-bank.create',compact('maxNum'));
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
            'name'=> 'required|max:190|unique:blood_banks,name',
            'contact'=> 'required',
            'district'=> 'required',
            'address'=> 'required',
            'serial_num'=> 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input['url']=\MyHelper::slugify($request->name);
        try{
            BloodBank::create($input);

            $bug=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Blood Bank Successfully Inserted');
        }else{
            return redirect()->back()->with('error',$bug);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BloodBank  $bloodBank
     * @return \Illuminate\Http\Response
     */
    public function show(BloodBank $bloodBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BloodBank  $bloodBank
     * @return \Illuminate\Http\Response
     */
    public function edit(BloodBank $bloodBank)
    {
        Session::put('title','Edit Blood Bank Info');
        return view('backend.blood-bank.edit',compact('bloodBank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BloodBank  $bloodBank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {

        $input = $request->all();
        $validator = Validator::make($input, [
            'name'=> "required|max:190|unique:blood_banks,name,$id",
            'contact'=> 'required',
            'district'=> 'required',
            'address'=> 'required',
            'serial_num'=> 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input['url']=\MyHelper::slugify($request->name);

        $bloodBank=BloodBank::findOrFail($id);
        try{
            $bloodBank->update($input);

            $bug=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Blood Bank Info Successfully Update');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BloodBank  $bloodBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(BloodBank $bloodBank)
    {

        try{
            $bloodBank->delete();
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
