<?php

namespace App\Http\Controllers;

use App\Models\CompanyList;
use App\Models\Menu;
use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Models\PrimaryInfo;

class PrimaryInfoController extends Controller
{

    /**
     * Display Video Section Information.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=PrimaryInfo::first();
        return view('backend.primaryInfo.primaryInfo',compact('data'));
    }

    /**
     * Show Section Contact photo.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Change Video section information, contact section photo and body parallax Background
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display Body Parallax Photo background.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=PrimaryInfo::first();
        return view('backend.primaryInfo.about',compact('data'));
    }

    /**
     * Show Organization primary information.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Display About Company.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update Primary info and about company.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'company_name'=>'required',
            'address'=>'required',
            'mobile_no'=>'required',
            'email'=>'required|email',
            'short_description'=>'required',
            'company_tag'=>'required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data=PrimaryInfo::findOrFail($request->id);

        if ($request->hasFile('logo')){
            //$phpo=$request->file('photo');
            $input['logo']=\MyHelper::photoUpload($request->file('logo'),'images/company-img/logo/',135,125);
            if (file_exists($data->logo)){
                unlink($data->logo);
            }
        }
        if ($request->hasFile('favicon')){
            //$phpo=$request->file('photo');
            $input['favicon']=\MyHelper::photoUpload($request->file('favicon'),'images/company-img/',32,32);
            if (file_exists($data->favicon)){
                unlink($data->favicon);
            }
        }

        try{
            $data->update($input);

            $bug=0;
        }catch(Exception $e){
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
