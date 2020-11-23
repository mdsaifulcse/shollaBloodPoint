<?php

namespace App\Http\Controllers;

use App\Models\BloodGroup;
use App\Models\FounderMembers;
use Illuminate\Http\Request;
use Validator;
use DB;
use Auth;
use Session;


class FounderMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // founder-member
        Session::put('title','List of Founder Members');
        $founderMembers=FounderMembers::orderBy('id','DESC')->paginate(30);
        return view('backend.founder-member.index',compact('founderMembers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Session::put('title','Create New Founder Member');
        $bloodGroups=BloodGroup::orderBy('serial_num','ASC')->pluck('name','id');
        return view('backend.founder-member.create',compact('bloodGroups'));
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
            'designation'=> 'required',
            'blood_group_id'=> 'required',
            'photo'=>'max:2048'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        if ($request->hasFile('photo')){
            //$phpo=$request->file('photo');
            $input['photo']=\MyHelper::photoUpload($request->file('photo'),'images/founder-members/',300);
        }
        try{
            FounderMembers::create($input);

            $bug=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Successfully Inserted');
        }else{
            return redirect()->back()->with('error',$bug);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FounderMembers  $founderMembers
     * @return \Illuminate\Http\Response
     */
    public function show(FounderMembers $founderMembers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FounderMembers  $founderMembers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fmember=FounderMembers::findOrFail($id);
        $bloodGroups=BloodGroup::orderBy('serial_num','ASC')->pluck('name','id');
        return view('backend.founder-member.edit',compact('fmember','bloodGroups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FounderMembers  $founderMembers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name'=> 'required',
            'designation'=> 'required',
            'blood_group_id'=> 'required',
            'photo'=>'max:2048'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $fmember=FounderMembers::findOrFail($id);


        if ($request->hasFile('photo')){
            //$phpo=$request->file('photo');
            $input['photo']=\MyHelper::photoUpload($request->file('photo'),'images/founder-members/',300);
            if (file_exists($fmember->photo)){
                unlink($fmember->photo);
            }
        }


        try{
            $fmember->update($input);

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
     * @param  \App\Models\FounderMembers  $founderMembers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $fmember=FounderMembers::findOrFail($id);
            $fmember->delete();
            if (file_exists($fmember->photo)){
                unlink($fmember->photo);
            }
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

    }
}
