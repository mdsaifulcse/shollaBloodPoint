<?php

namespace App\Http\Controllers;

use App\Models\BloodDonates;
use App\Models\BloodGroup;
use App\Models\District;
use App\Models\Member;
use App\Models\ThanaUpazila;
use App\Models\Union;
use App\Models\Village;
use App\User;
use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;

class MemberRegistrationController extends Controller
{

    public function memberRegistration(){

        $firstNumber=mt_rand(1,10);
        $secondNumber=mt_rand(1,10);

        $districts=District::orderBy('serial_num','ASC')->pluck('district','id');
        $bloodGroups=BloodGroup::orderBy('serial_num','ASC')->pluck('name','id');

        return view('frontend.register.member-register',compact('districts','bloodGroups','firstNumber','secondNumber'));
    }

    public function registerAMember(Request $request){

        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required|string|max:50',
            'phone_number' => 'required|string|min:11|max:11|unique:users|regex:/(01)[0-9]{9}/',
            'password' => 'required|string|min:6|max:12|confirmed',
            //'photo'=>'mimes:jpe,jpeg,png,gif|max:3072',
           // 'father_name'=>'required|max:50',
            'district_id'=>'required|numeric',
            'thana_upazila_id'=>'required|numeric',
            'union_id'=>'required|numeric',
            'village_id'=>'required|numeric',
            'member_type'=>'required|numeric',
            'blood_group_id'=>'required|numeric',
            'last_blood_donation'=>'required|date',
            //'birthdate'=>'required|date',
            'donation_status'=>'nullable|numeric',
            'number_of_donation'=>'nullable|numeric|max:100',
            'first_number'=>'required|numeric',
            'second_number'=>'required|numeric',
            'answer'=>"required"
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $answer=$request->first_number+$request->second_number;
        if ($answer!=$request->answer){
            return redirect()->back()->with('msg','Your answer is incorrect !');
        }

        if ($request->hasFile('photo')){
            //$phpo=$request->file('photo');
            $input['photo']=\MyHelper::photoUpload($request->file('photo'),'images/member/',350);
        }

        $rand=mt_rand(100,90000);
        $email='';
        if ($request->email){
            $email=$request->email;
        }else{
            $email= "m".$rand.'@gmail.com';
        }

        $input['last_blood_donation']= date('Y-m-d', strtotime($request->last_blood_donation));
        $input['birthdate']= date('Y-m-d', strtotime($request->birthdate));

        DB::beginTransaction();
        try{
            // save to user table ---------
            $userId=User::create([
                'name'=>$request->name,
                'email'=>$email,
                'type'=>2, // Member type
                'phone_number'=>$request->phone_number,
                'password'=>bcrypt($request->password)
            ])->id;

            $input['user_id']=$userId;
            Member::create($input);

            $numberOfDonation=1;
                if($request->number_of_donation!==null){
                    $numberOfDonation=$request->number_of_donation;
                }
            BloodDonates::create(
                [
                    'user_id'=>$userId,
                    'last_blood_donation'=>date('Y-m-d', strtotime($request->last_blood_donation)),
                    'number_of_donation'=>$numberOfDonation,
                    'status'=>1
                ]
            );

            DB::commit();
            $bug=0;
        }catch(Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
            $bug1=$e->errorInfo[2];
        }
        if($bug==0){
            return redirect()->back()->with('success','Your registration is successful & waiting for approval');
        }else{
            return redirect()->back()->with('error',$bug);
        }

    }


    public function loadThanaUpazila($id=null){
        if($id!=null){
            $thanUpazilas = ThanaUpazila::where('district_id',$id)->pluck('thana_upazila','id');
        }else{
            $thanUpazilas = [];
        }
        return view('frontend.register.load-thana',compact('thanUpazilas'));
    }


    public function showMemberProfile(){
        $userInfo=User::leftjoin('members','users.id','members.user_id')
            ->select('users.*')->where('users.id',auth()->user()->id)->where('members.status',1)->first();
        return view('frontend.register.member-area',compact('userInfo'));
    }

    public function memberEditProfile() {
        $districts = District::orderBy('serial_num', 'ASC')->pluck('district', 'id');
        $bloodGroups = BloodGroup::orderBy('serial_num', 'ASC')->pluck('name', 'id');
        $memberInfo = Member::with('userData')
            ->where('user_id', auth()->user()->id)->where('status', 1)->first();
        if ($memberInfo != null){
            $thans = ThanaUpazila::orderBy('serial_num', 'ASC')->where('district_id', $memberInfo->district_id)->pluck('thana_upazila', 'id');
            $unions=Union::orderBy('id','DESC')->where('status',1)->where('thana_upazila_id',$memberInfo->thana_upazila_id)->pluck('union','id');
            $villages=Village::orderBy('id','DESC')->where('status',1)->where('union_id',$memberInfo->union_id)->pluck('village','id');
            }
        return view('frontend.register.edit-profile',compact('districts','bloodGroups','memberInfo','thans','unions','villages'));
    }

    public function updateMemberProfile(Request $request){

        $userId=auth()->user()->id;
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required|string|max:255',
            'email' =>"required|string|email|max:255|unique:users,email,$userId",
            'phone_number' =>"required|string|min:11|max:11|unique:users,phone_number,$userId|regex:/(01)[0-9]{9}/",
            'photo'=>'mimes:jpe,jpeg,png,gif|max:3072',
            'father_name'=>'required|max:150',
            'district_id'=>'required|numeric',
            'thana_upazila_id'=>'required|numeric',
            'union_id'=>'required|numeric',
            'village_id'=>'required|numeric',
            'member_type'=>'required|numeric',
            'blood_group_id'=>'required|numeric',
            'birthdate'=>'required|date',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }



        $member=Member::findOrFail($request->id);
        if ($request->hasFile('photo')){
            //$phpo=$request->file('photo');
            $input['photo']=\MyHelper::photoUpload($request->file('photo'),'images/member/',350);
            if(file_exists($member->photo)){
                unlink($member->photo);
            }
        }


        $input['birthdate']= date('Y-m-d', strtotime($request->birthdate));

        DB::beginTransaction();
        try{
            // save to user table ---------
            $user=User::findOrFail($userId);
            $user->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone_number'=>$request->phone_number,
                //'password'=>bcrypt($request->password)
            ]);


            $member->update($input);

            DB::commit();
            $bug=0;
        }catch(Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
            $bug1=$e->errorInfo[2];
        }
        if($bug==0){
            return redirect()->back()->with('success','Your Information Successfully Update');
        }else{
            return redirect()->back()->with('error',$bug);
        }

    }

}
