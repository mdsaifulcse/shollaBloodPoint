<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\ThanaUpazila;
use Illuminate\Http\Request;
use Validator;
use Session;

class ThanaUpazilaController extends Controller
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
            'thana_upazila'=> "required|unique:thana_upazilas,thana_upazila",
            'district_id'=>'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try{
            ThanaUpazila::create($input);

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
     * @param  \App\Models\ThanaUpazila  $thanaUpazila
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thanaUpazilas=ThanaUpazila::leftJoin('districts','thana_upazilas.district_id','=','districts.id')
            ->select('thana_upazilas.*','districts.district','districts.id as district_id')
            ->where('district_id',$id)->orderBy('serial_num','ASC')->paginate(15);
        $district=District::findOrFail($id);

        $max_serial=ThanaUpazila::where('district_id',$id)->max('serial_num');
        return view('backend.setting.thana-upazila.index',compact('thanaUpazilas','district','max_serial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ThanaUpazila  $thanaUpazila
     * @return \Illuminate\Http\Response
     */
    public function edit(ThanaUpazila $thanaUpazila)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ThanaUpazila  $thanaUpazila
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'thana_upazila'=> "required|unique:thana_upazilas,thana_upazila,$id",
            'district_id'=>'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $thanaUpazila=ThanaUpazila::findOrFail($id);
        try{
            $thanaUpazila->update($input);

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
     * @param  \App\Models\ThanaUpazila  $thanaUpazila
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThanaUpazila $thanaUpazila)
    {
        try{
            $thanaUpazila->delete();
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
