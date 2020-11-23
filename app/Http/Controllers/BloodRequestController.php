<?php

namespace App\Http\Controllers;

use App\Models\BloodRequest;
use Illuminate\Http\Request;
use Validator;

class BloodRequestController extends Controller
{
    protected function requestFroBlood(){
        $firstNumber=mt_rand(1,10);
        $secondNumber=mt_rand(1,10);
        return view('frontend.blood-request.request-for-blood',compact('firstNumber','secondNumber'));
    }

    public function submitBloodRequest(Request $request){

        $input = $request->all();
        $validator = Validator::make($input, [
            'name'=> "required|max:100",
            'mobile'=> "min:11|max:11|required|regex:/(01)[0-9]{9}/",
            'district_id'=>'required',
            'blood_group_id'=>'required',
            'amount'=>'required|max:10',
            'disease'=>'required|max:150',
            'patient_location'=>'required|max:100',
            'date_of_donation'=>'required|date',
            'message'=>'max:200',
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

        try{
            BloodRequest::create($input);

            $bug=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Your Request has been send & waiting for approval');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }

    protected function listOfBloodRequest(){
        $bloodRequests=BloodRequest::where('status',1)->where('manage_status',1)->paginate(10);
        return view('frontend.blood-request.blood-request-list',compact('bloodRequests'));
    }

}
