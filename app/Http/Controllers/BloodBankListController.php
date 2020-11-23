<?php

namespace App\Http\Controllers;

use App\Models\BloodBank;
use Illuminate\Http\Request;

class BloodBankListController extends Controller
{
    protected function yourBloodBanksLists(){
        $bloodBanks=BloodBank::orderBy('serial_num','ASC')->where('status',1)->get();
        return view('frontend.blood-bank.blood-bank-list',compact('bloodBanks'));
    }
}
