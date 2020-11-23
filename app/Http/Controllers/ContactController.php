<?php

namespace App\Http\Controllers;

use App\Models\UserMessage;
use Illuminate\Http\Request;
use Validator;

class ContactController extends Controller
{
    public function contactFunction(){
        // data come form service provider ---------------
        return view('frontend.contact');
    }

    public function messageFormUser(Request $request){
        $input = $request->all();
        $validator = Validator::make($input, [
            'name'=> "required|max:50",
            'email'=> "required|email|max:50",
            'mobile'=> "min:11|max:11|required|regex:/(01)[0-9]{9}/",
            'subject'=> "required|max:100",
            'message'=> "required|max:250",

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try{
            UserMessage::create($input);

            $bug=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','We have received your message , Thank you very much for being with us');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }

    public function showUserMessage(){
         $messages=UserMessage::orderBy('id','DESC')->paginate(10);
        return view('backend.user-message',compact('messages'));
    }

    public function deleteUserMessage(Request $request){

        $userMessage=UserMessage::findOrFail($request->id);
        try{
            $userMessage->delete();
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
