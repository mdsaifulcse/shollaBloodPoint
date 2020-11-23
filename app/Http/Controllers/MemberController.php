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
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;
use Session;
use Auth;
use DB;
use Yajra\Datatables\Datatables;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('title','All Registration Members List');
        return view('backend.register-member.index');
    }

    public function showMembers(){
        $members=Member::leftjoin('users','members.user_id','users.id')
        ->leftjoin('blood_groups','members.blood_group_id','blood_groups.id')
        ->select('users.name','users.id as userId','users.email','phone_number','blood_groups.name as blood_group','members.*')
           ->orderBy('members.id','DESC')->where('members.status',1)->where('members.member_type',1);

        return DataTables::of($members)
            ->addColumn('last_blood_donation','<?php echo date(\'d-m-Y\',strtotime("$last_blood_donation"))?>')
            ->addColumn('action',' {!!Form::open(array(\'route\'=>[\'member-register.destroy\',"$id"],\'method\'=>\'DELETE\',\'id\'=>"deleteForm$id"))!!}
                <a href="{{URL::to("member-register/$id/")}}" title=\'Click here to view all info \' class="btn btn-info btn-xs" target="_blank"> <i class="fa fa-eye"></i></a>
                <a href="{{URL::to("member-register/$id/edit")}}" title=\'Click here to edit \' class="btn btn-warning btn-xs"> <i class="fa fa-pencil-square"></i></a>
                <a href="{{URL::to("change-member-password/$userId/")}}" title=\'Click here to change password \' class="btn btn-success btn-xs"> <i class="fa fa-key"></i></a>
                <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm(\'deleteForm{{ $id}}\')"><i class="fa fa-trash"></i></button>
           {!! Form::close() !!}')
            ->rawColumns(['last_blood_donation','action'])
            ->make(true);
    }

    public function volunteerMembersList()
    {
        Session::put('title','Volunteer Members List');
        return view('backend.register-member.volunteers');
    }

    public function showVolunteerMembers(){
        $members=Member::leftjoin('users','members.user_id','users.id')
            ->leftjoin('blood_groups','members.blood_group_id','blood_groups.id')
            ->select('users.name','users.id as userId','users.email','phone_number','blood_groups.name as blood_group','members.*')
            ->orderBy('members.id','DESC')->where('members.status',1)->where('members.member_type',2);

        return DataTables::of($members)
            ->addColumn('last_blood_donation','<?php echo date(\'d-m-Y\',strtotime("$last_blood_donation"))?>')
            ->addColumn('action',' {!!Form::open(array(\'route\'=>[\'member-register.destroy\',"$id"],\'method\'=>\'DELETE\',\'id\'=>"deleteForm$id"))!!}
                <a href="{{URL::to("member-register/$id/")}}" title=\'Click here to view all info \' class="btn btn-info btn-xs" target="_blank"> <i class="fa fa-eye"></i></a>
                <a href="{{URL::to("member-register/$id/edit")}}" title=\'Click here to edit \' class="btn btn-warning btn-xs"> <i class="fa fa-pencil-square"></i></a>
                <a href="{{URL::to("change-member-password/$userId/")}}" title=\'Click here to change password \' class="btn btn-success btn-xs"> <i class="fa fa-key"></i></a>
                <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm(\'deleteForm{{ $id}}\')"><i class="fa fa-trash"></i></button>
           {!! Form::close() !!}')
            ->rawColumns(['last_blood_donation','action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        Session::put('title','Register a new member');
        $districts=District::orderBy('serial_num','ASC')->pluck('district','id');
        $bloodGroups=BloodGroup::orderBy('serial_num','ASC')->pluck('name','id');
        return view('backend.register-member.create',compact('districts','bloodGroups'));
    }

    public function loadThanaUpazila($id=null){
        if($id!=null){
            $thanUpazilas = ThanaUpazila::where('district_id',$id)->pluck('thana_upazila','id');
        }else{
            $thanUpazilas = [];
        }
        return view('backend.register-member.load-thana',compact('thanUpazilas'));
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
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|min:11|max:11|unique:users|regex:/(01)[0-9]{9}/',
            'password' => 'required|string|min:6|confirmed',
            'photo'=>'mimes:jpe,jpeg,png,gif|max:2048',
            'father_name'=>'required|max:150',
            'district_id'=>'required|numeric',
            'thana_upazila_id'=>'required|numeric',
            'union_id'=>'required',
            'village_id'=>'required',
            'member_type'=>'required|numeric',
            'blood_group_id'=>'required',
            'last_blood_donation'=>'required|date',
            'birthdate'=>'required|date',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('photo')){
            //$phpo=$request->file('photo');
            $input['photo']=\MyHelper::photoUpload($request->file('photo'),'images/member/',350);
        }

        $input['created_by']=auth()->user()->id;
        $input['last_blood_donation']= date('Y-m-d', strtotime($request->last_blood_donation));
        $input['birthdate']= date('Y-m-d', strtotime($request->birthdate));

        DB::beginTransaction();
        try{

            $rand=mt_rand(100,80000);
            $email='';
            if ($request->email){
                $email=$request->email;
            }else{
                $email= "m".$rand.'@gmail.com';
            }

            // save to user table ---------
            $userId=User::create([
                'name'=>$request->name,
                'email'=>$email,
                'phone_number'=>$request->phone_number,
                'password'=>bcrypt($request->password),
                'type'=>2
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
            return redirect()->back()->with('success','New Member Successfully Created');
        }else{
            return redirect()->back()->with('error',$bug);
        }
    }


    public function newWaitingMember(){
//         $now=Carbon::now();
//        $newMembers=Member::orderBy('id','DESC')->where('status',0)->first();
//        $created = new Carbon($newMembers->created_at);
//        $difference = ($created->diff($now)->days < 1)
//            ? 'today'
//            : $created->diffForHumans($now);
        $newMembers=Member::orderBy('id','DESC')->where('status',0)->paginate(10);

        return view('backend.register-member.approve-member',compact('newMembers'));
    }

    public function approveNewMember($id)
    {
        DB::beginTransaction();
        try {
            // save to user table ---------
            $approveMember = Member::findOrFail($id);

            $approveMember->update(['status' => 1]);

            DB::commit();
            $bug=0;
        } catch (Exception $e) {
            DB::rollback();
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }
        if ($bug == 0) {
            return redirect()->back()->with('success', 'This Member Successfully Approved');
        } else {
            return redirect()->back()->with('error', $bug);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $membersInfo=Member::findOrFail($id);
        Session::put('title','Member Details Info');
        $districts=District::orderBy('serial_num','ASC')->pluck('district','id');
        $bloodGroups=BloodGroup::orderBy('serial_num','ASC')->pluck('name','id');
        $member=Member::leftjoin('users','members.user_id','users.id')
            ->select('users.name','users.email','phone_number','users.id as user_id','members.*')
            ->where('members.id',$id)->orderBy('members.id','DESC')->first();
        $numberOfDonation=BloodDonates::where('user_id',$member->user_id)->max('number_of_donation');

        $thanaUpazila=ThanaUpazila::orderBy('id','DESC')->where('status',1)->where('district_id',$member->district_id)->pluck('thana_upazila','id');
        return view('backend.register-member.show',compact('member','thanaUpazila','districts','bloodGroups','numberOfDonation'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Session::put('title','Edit Memeber Info');
        $districts=District::orderBy('serial_num','ASC')->pluck('district','id');
        $bloodGroups=BloodGroup::orderBy('serial_num','ASC')->pluck('name','id');
        $member=Member::leftjoin('users','members.user_id','users.id')
            ->select('users.name','users.email','phone_number','users.id as user_id','members.*')
            ->orderBy('members.id','DESC')->where('members.id',$id)->first();

        $thanaUpazila=ThanaUpazila::orderBy('id','DESC')->where('status',1)->where('district_id',$member->district_id)->pluck('thana_upazila','id');
        $unions=Union::orderBy('id','DESC')->where('status',1)->where('thana_upazila_id',$member->thana_upazila_id)->pluck('union','id');
        $villages=Village::orderBy('id','DESC')->where('status',1)->where('union_id',$member->union_id)->pluck('village','id');
        $numberOfDonation=BloodDonates::where('user_id',$member->user_id)->max('number_of_donation');
        return view('backend.register-member.edit',compact('member','thanaUpazila','districts','bloodGroups','unions','villages','numberOfDonation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required|string|max:255',
            'email' =>"required|string|email|max:255|unique:users,email,$request->user_id",
            'phone_number' =>"required|string|min:11|max:11|unique:users,phone_number,$request->user_id|regex:/(01)[0-9]{9}/",
            'photo'=>'mimes:jpe,jpeg,png,gif|max:2048',
            'father_name'=>'required|max:150',
            'district_id'=>'required|numeric',
            'thana_upazila_id'=>'required|numeric',
            'union_id'=>'required|max:150',
            'village_id'=>'max:150',
            'member_type'=>'required|numeric',
            'blood_group_id'=>'required',
            'last_blood_donation'=>'required|date',
            'birthdate'=>'required|date',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $member=Member::findOrFail($id);
        if ($request->hasFile('photo')){
            //$phpo=$request->file('photo');
            $input['photo']=\MyHelper::photoUpload($request->file('photo'),'images/member/',350);
            if(file_exists($member->photo)){
                unlink($member->photo);
            }
        }

        $input['updated_by']=auth()->user()->id;
        $input['last_blood_donation']= date('Y-m-d', strtotime($request->last_blood_donation));
        $input['birthdate']= date('Y-m-d', strtotime($request->birthdate));

        DB::beginTransaction();
        try{
            // update to user table ---------
            $user=User::findOrFail($request->user_id);
            $user->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone_number'=>$request->phone_number,
            ]);

            $member->update($input);

            $numberOfDonation=BloodDonates::where('user_id',$member->user_id)->orderBy('id','desc')->first();

            $numberOfDonation->update(['number_of_donation'=>$request->number_of_donation]);

            DB::commit();
            $bug=0;
        }catch(Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
            $bug1=$e->errorInfo[2];
        }
        if($bug==0){
            return redirect()->back()->with('success','Member Successfully Update');
        }else{
            return redirect()->back()->with('error',$bug);
        }
    }


    public function allFounderMembers(){
        Session::put('title','All founder members list');
        return view('backend.register-member.founder-members');
    }

    public function showAllFounderMembers(){
        $members=Member::leftjoin('users','members.user_id','users.id')
            ->leftjoin('blood_groups','members.blood_group_id','blood_groups.id')
            ->select('users.name','users.id as userId','users.email','phone_number','blood_groups.name as blood_group','members.*')
            ->orderBy('members.id','DESC')->where('members.status',1)->where('member_type',3);


        return DataTables::of($members)
            ->addColumn('last_blood_donation','<?php echo date(\'d-m-Y\',strtotime("$last_blood_donation"))?>')
            ->addColumn('action',' {!!Form::open(array(\'route\'=>[\'member-register.destroy\',"$id"],\'method\'=>\'DELETE\',\'id\'=>"deleteForm$id"))!!}
                <a href="{{URL::to("member-register/$id/")}}" title=\'Click here to view all info \' class="btn btn-info btn-xs" target="_blank"> <i class="fa fa-eye"></i></a>
                <a href="{{URL::to("member-register/$id/edit")}}" title=\'Click here to edit \' class="btn btn-warning btn-xs"> <i class="fa fa-pencil-square"></i></a>
                <a href="{{URL::to("change-member-password/$userId/")}}" title=\'Click here to change password \' class="btn btn-success btn-xs"> <i class="fa fa-key"></i></a>
                <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm(\'deleteForm{{ $id}}\')"><i class="fa fa-trash"></i></button>
           {!! Form::close() !!}')
            ->rawColumns(['last_blood_donation','action'])
            ->make(true);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try{
            $member=Member::findOrFail($id);
            $user=User::findOrFail($member->user_id);
            $bloodDonationInfo=BloodDonates::where('user_id',$member->user_id)->get();
            foreach ($bloodDonationInfo as $bloodDonation){
                $bloodDonation->delete();
            }
            $member->delete();
            $user->delete();
            $bug=0;
            DB::commit();
            $error=0;
        }catch(\Exception $e){
            DB::rollback();
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
    public function newBloodDonation(){
        $newBloodDonation=BloodDonates::where('status',0)->get();
        return view('backend.register-member.member-new-blood-donation',compact('newBloodDonation'));

    }
}
