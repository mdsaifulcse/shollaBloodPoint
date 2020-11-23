<?php

namespace App\Http\Controllers;

use App\Models\BloodGroup;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Auth;
use DB;
use App\Models\Member;
use Yajra\Datatables\Datatables;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.primaryInfo.dashboard.superAdmin.dashboard');
    }

    public function donorsByGroup($id){
        Session::put('title','Donors by blood group');
        $bloodGroup=BloodGroup::where('id',$id)->first();
        return view('backend.donors-by-group.index',compact('id','bloodGroup'));
    }

    public function showDonorsByGroup($id){

        $members=Member::leftjoin('users','members.user_id','users.id')
            ->leftjoin('blood_groups','members.blood_group_id','blood_groups.id')
            ->where(['members.status'=>1,'members.member_type'=>1,'blood_group_id'=>$id])->where('last_blood_donation','<',Carbon::now()->subDays(90))
            ->select('users.name','users.email','phone_number','blood_groups.name as blood_group','members.id','members.last_blood_donation')
            ->orderBy('members.id','DESC');

        return DataTables::of($members)
            ->addColumn('last_blood_donation','<?php echo date(\'d-M-Y\',strtotime("$last_blood_donation"))?>')
            ->addColumn('action',' {!!Form::open(array(\'route\'=>[\'member-register.destroy\',"$id"],\'method\'=>\'DELETE\',\'id\'=>"deleteForm$id"))!!}
                <a href="{{URL::to("member-register/$id/")}}" title=\'Click here to view all info \' class="btn btn-info btn-xs" target="_blank"> <i class="fa fa-eye"></i></a>
                <a href="{{URL::to("member-register/$id/edit")}}" title=\'Click here to edit \' class="btn btn-warning btn-xs"> <i class="fa fa-pencil-square"></i></a>
                <!--<button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm(\'deleteForm{{ $id}}\')"><i class="fa fa-trash"></i></button>-->
           {!! Form::close() !!}')
            ->rawColumns(['last_blood_donation','action'])
            ->make(true);
    }

    public function userRegister(){
        return view('backend.donors-by-group.index',compact('id','bloodGroup'));
    }



}
