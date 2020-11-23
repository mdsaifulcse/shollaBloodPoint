<?php

namespace App\Http\Controllers;

use App\Models\BloodDonates;
use App\Models\BloodGroup;
use App\Models\Member;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Validator,DB,Auth;
use Yajra\Datatables\Datatables;

class BloodDonatesController extends Controller
{
    public function bloodDonorByGroup($group,$id){
        $bloodGroup=BloodGroup::findOrFail($id);
        return view('frontend.search-donor.blood-donor-by-group',compact('bloodGroup'));
    }

    public function showAllDonorsByGroup($id){
        $members=Member::leftjoin('users','members.user_id','users.id')
            ->leftjoin('blood_groups','members.blood_group_id','blood_groups.id')
            ->leftjoin('districts','members.district_id','districts.id')
            ->leftjoin('thana_upazilas','members.thana_upazila_id','thana_upazilas.id')
            ->leftjoin('unions','members.union_id','unions.id')
            ->leftjoin('villages','members.village_id','villages.id')
            ->where(['members.status'=>1,'members.member_type'=>1,'blood_group_id'=>$id])->where('last_blood_donation','<=',Carbon::now()->subDays(90))
            ->select('users.name','users.email','phone_number','blood_groups.name as blood_group','blood_groups.mobile','blood_groups.admin_name',
                'district','thana_upazilas.thana_upazila','unions.union','villages.village','members.id','members.last_blood_donation')
            ->orderBy('members.id','DESC');

        return DataTables::of($members)
            ->addColumn('last_blood_donation','<?php echo date(\'d-M-Y\',strtotime("$last_blood_donation"))?>')
            ->addColumn('donationStatus','Eligible to donate')
            ->rawColumns(['last_blood_donation','donationStatus'])
            ->make(true);
    }

    public function memberLastBloodDonation(){

        $memberStatus=Member::where('user_id',auth()->user()->id)->where('status',1)->select('status')->first();
        $numberOfDonation=BloodDonates::where('user_id',auth()->user()->id)->max('number_of_donation');
        return view('frontend.register.last-blood-donation',compact('memberStatus','numberOfDonation'));
    }

    protected function saveLastBloodDonation(Request $request){
        $input = $request->all();
        $validator = Validator::make($input, [
            'last_blood_donation' => 'required|date',
            'patient_name' => 'required|max:50',
            'patient_mobile' => 'required|max:11|min:11|regex:/(01)[0-9]{9}/',
            'patient_diseases' => 'required|max:100',
            'hospital' => 'nullable|max:100',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input['last_blood_donation']= date('Y-m-d', strtotime($request->last_blood_donation));

        DB::beginTransaction();
        try{
            // save to Blood donation  table ---------
            $input['user_id']=auth()->user()->id;
            BloodDonates::create($input);

            DB::commit();
            $bug=0;
        }catch(Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
            $bug1=$e->errorInfo[2];
        }
        if($bug==0){
            return redirect()->back()->with('success','Your blood donation info waiting for review');
        }else{
            return redirect()->back()->with('error',$bug);
        }
    }

    public function memberBloodDonationDetails(){
        $memberStatus=Member::where('user_id',auth()->user()->id)->where('status',1)
            ->select('status')->first();
        $bloodDonationDetails=BloodDonates::orderBy('id','desc')->where('user_id',auth()->user()->id)->where('status',1)->whereNotNull('patient_mobile')->paginate(12);
        return view('frontend.register.blood-donation-details',compact('memberStatus','bloodDonationDetails'));
    }


    public function recordBloodDonation($id){

        DB::beginTransaction();
        try{
            // save to Blood donation  table ---------

           $donationData= BloodDonates::findOrFail($id);

            $maxVal=BloodDonates::where('user_id',$donationData->user_id)->max('number_of_donation');
            if ($maxVal>0){
              $maxVal=$maxVal+1;
            }else{
              $maxVal=1;
            }

            $donationData->update(['status'=>1,'number_of_donation'=>$maxVal]);

            // update also member table -----------
             $member=Member::where('user_id',$donationData->user_id)->first();
            $member->update(['last_blood_donation'=>$donationData->last_blood_donation]);

            DB::commit();
            $bug=0;
        }catch(Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
            $bug1=$e->errorInfo[2];
        }
        if($bug==0){
            return redirect()->back()->with('success',' Blood donation info saved successfully');
        }else{
            return redirect()->back()->with('error',$bug);
        }
    }

    public function deleteNewBloodDonation($id){

        try{
            $bloodDonation=BloodDonates::findOrFail($id);

            $bloodDonation->delete();
            $bug=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
            $error=$e->errorInfo[2];
        }

        if($bug==0){
            return redirect()->back()->with('success','Fake blood donation info delete successfully');
        }else{
            return redirect()->back()->with('error',$bug);
        }
    }

    public function showBloodDonorsByYear(Request $request){
          $donorOfYear=BloodDonates::leftjoin('users','blood_donates.user_id','users.id')
            ->leftjoin('members','blood_donates.user_id','members.user_id')
            ->select(DB::raw('count(number_of_donation) as maxDonation'), 'users.name','users.phone_number',
                'members.photo','blood_donates.id','blood_donates.user_id','blood_donates.last_blood_donation')
            ->where('blood_donates.status',1)->whereYear('blood_donates.last_blood_donation',date('Y',strtotime($request->donation_year)))->orderBy('maxDonation','desc')->groupBy('user_id')
            ->take($request->number_of_donors)->get();
        return view('backend.best-donor.create',compact('request','donorOfYear'));
    }
}
