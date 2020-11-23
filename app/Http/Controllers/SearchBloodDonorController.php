<?php

namespace App\Http\Controllers;

use App\Models\BloodDonates;
use Illuminate\Http\Request;
use Validator;
use Session;
use Auth;
use DB;
use Yajra\Datatables\Datatables;

class SearchBloodDonorController extends Controller
{
    public function searchRequiredBloodDonor(){
        return view('frontend.search-donor.search-blood-donor');
    }

    public function showBloodReceiverList(){
        Session::put('title','Blood Receivers List');
        return view('backend.blood-receiver.index');
    }

    /**
     * @return mixed
     */
    public function showActiveBloodReceiverList(){
         $bloodReceivers=BloodDonates::leftJoin('users','users.id','blood_donates.user_id')
             ->select('users.name','users.phone_number','blood_donates.*')
             ->orderBy('blood_donates.id','DESC')->where('blood_donates.status',1)
             ->where('blood_donates.patient_name','!=','null')->where('blood_donates.patient_mobile','!=','null');

        return DataTables::of($bloodReceivers)
            ->addIndexColumn()
            ->addColumn('DT_RowIndex','')
            ->addColumn('last_blood_donation','<?php echo date(\'d-m-Y\',strtotime("$last_blood_donation"))?>')
            ->rawColumns(['last_blood_donation'])
            ->toJson();
    }
}
