<?php

namespace App\Http\Controllers;

use App\Models\BloodDonates;
use App\Models\FounderMembers;
use App\Models\Member;
use App\Models\Notice;
use App\Models\PhotoGallery;
use App\Models\PrimaryInfo;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Auth;
use Yajra\Datatables\Datatables;
use Validator;


class BloodPointController extends Controller
{
    public function index(){
        //return Carbon::now()->subDays(90);
         $topMembers=BloodDonates::leftjoin('users','blood_donates.user_id','users.id')
             ->leftjoin('members','blood_donates.user_id','members.user_id')
            ->select(DB::raw('max(number_of_donation) as maxDonation'), 'users.name','users.phone_number',
                'members.photo','blood_donates.id','blood_donates.user_id')
            ->where('blood_donates.status',1)->orderBy('maxDonation','desc')->groupBy('user_id')
           ->take(10)->get();
        return view('frontend.home.index',compact('topMembers'));
    }

    public function allEligibleDonors(){
        $members=Member::leftjoin('users','members.user_id','users.id')
            ->leftjoin('blood_groups','members.blood_group_id','blood_groups.id')
            ->leftjoin('districts','members.district_id','districts.id')
            ->leftjoin('thana_upazilas','members.thana_upazila_id','thana_upazilas.id')
            ->leftjoin('unions','members.union_id','unions.id')
            ->leftjoin('villages','members.village_id','villages.id')
            ->where(['members.status'=>1,'members.member_type'=>1])->where('members.last_blood_donation','<=',Carbon::now()->subDays(94))
            ->select('users.name','blood_groups.name as blood_group','districts.district',
                'thana_upazilas.thana_upazila','unions.union','villages.village','members.id','members.last_blood_donation')
            ->orderBy('members.id','DESC');

        return DataTables::of($members)
            ->addIndexColumn()
            ->addColumn('DT_RowIndex','')
            ->addColumn('last_blood_donation','<?php echo date(\'d-M-Y\',strtotime("$last_blood_donation"))?>')
            ->addColumn('profile','
            <a  href="javascript:void(0);" onclick="loadDonorProfile({{$id}})"> <i class="fa fa-eye"></i> View</a>
           <!--<button onclick="loadDonorProfile()" >sdf</button>-->
           
            ')
            ->rawColumns(['last_blood_donation','profile'])
            ->make(true);
    }

    public function donorProfile($id){
        $member=Member::leftjoin('users','members.user_id','users.id')
            ->leftjoin('blood_groups','members.blood_group_id','blood_groups.id')
            ->leftjoin('districts','members.district_id','districts.id')
            ->leftjoin('thana_upazilas','members.thana_upazila_id','thana_upazilas.id')
            ->leftjoin('unions','members.union_id','unions.id')
            ->leftjoin('villages','members.village_id','villages.id')
            ->where(['members.status'=>1,'members.member_type'=>1,'members.id'=>$id])
            ->select('users.name','users.email','phone_number','blood_groups.admin_name','blood_groups.mobile','blood_groups.name as blood_group',
                'blood_groups.mobile','district','thana_upazilas.thana_upazila','unions.union','villages.village','members.*')
            ->first();
        return response()->json($member,200);
    }

    public function topDonorProfile($useId){

        $topMember=Member::leftjoin('users','members.user_id','users.id')
            ->leftjoin('blood_groups','members.blood_group_id','blood_groups.id')
            ->leftjoin('districts','members.district_id','districts.id')
            ->leftjoin('thana_upazilas','members.thana_upazila_id','thana_upazilas.id')
            ->leftjoin('unions','members.union_id','unions.id')
            ->leftjoin('villages','members.village_id','villages.id')
            ->where(['members.status'=>1,'members.member_type'=>1,'members.user_id'=>$useId])
            ->select('users.name','users.email','phone_number','blood_groups.name as blood_group',
                'blood_groups.mobile','district','thana_upazilas.thana_upazila','unions.union','villages.village','members.*')
            ->first();
        $maxVal=BloodDonates::where('user_id',$useId)->max('number_of_donation');
        return response()->json(['topMember'=>$topMember,'maxVal'=>$maxVal],200);
    }


    public function bloodPointInfo(){
        return view('frontend.about');
    }

    public function noticeDetails($id){
        $notice=Notice::where('id',$id)->where('status',1)->first();
        if ($notice==null){
            return redirect()->back();
        }
        return view('frontend.notice.index',compact('notice'));
    }

    public function memberChangePass(){

        $userInfo=User::leftjoin('members','users.id','members.user_id')
        ->select('users.*')->where('users.id',auth()->user()->id)->where('members.status',1)->first();
        return view('frontend.register.password-change',compact('userInfo'));
    }

    protected function changeMemberPassword(Request $request){
        return $request;

        $id = \Auth::user()->id;
        $input=$request->all();
        $newPass=$input['password'];

        $validator = Validator::make($request->all(),[
            'password' => 'required|min:6|confirmed',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input['password']=bcrypt($newPass);
        $data=User::findOrFail($id);
        try{
            $data->update($input);
            $bug=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Password Changed Successfully !');
        }else{
            return redirect()->back()->with('error','Something is wrong !');

        }
    }

    public function showAllFounderMembersList(){
        $founderMembers=FounderMembers::orderBy('id','DESC')->get();
        return view('frontend.founder-members-list',compact('founderMembers'));
    }


    public function detailsAboutOranization($id){
        $organizationInfo =PrimaryInfo::findOrFail($id);
        return view('frontend.home.organization-details',compact('organizationInfo'));
    }

    public function photoGallery(){
        $photoGallerys=PhotoGallery::orderBy('id','DESC')->where('status',1)->get();
        return view('frontend.photo-gallery',compact('photoGallerys'));
    }
}
