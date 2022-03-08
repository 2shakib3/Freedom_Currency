<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\CodeModel;
use App\Models\Userwithdraw;
use App\Models\UserPayment;
use Auth;
class UserDashboard extends Controller
{
    //View User DashBoard
    function  userdasboard(){
        return view('user/dashboard/view');
}
   //View User Deposit Page
function  userdeposit(){
    return view('user/dashboard/deposit');
}
    //View User Invest Page
function  userinvest(){
    return view('user/dashboard/invest');
}
  //View User withdraw Page
function  userwithdraw(){
    $draws=UserWithdraw::all();
    return view('user/dashboard/withdraw',compact('draws'));
}
//User withdraw Post
function withdrawpost(Request $request){
    UserWithdraw::insert([
     'amount'=>$request->amount,
     'pay_number'=>$request->pay_number,
     'pay_method'=>$request->pay_method,
    ]);
    return back()->with('msg','Successfully Requested');
}


  //View User  transaction Page
function  usertransection(){
    return view('user/dashboard/transaction');
}
  //View User  Notification Page
function  usernotification(){
    return view('user/dashboard/notification');
}
//view code page
function code(){
    return view('font_end.pages.code');
}
function codepost(Request $request){
    CodeModel::insert([
        'code'=>$request->code,
    ]);
    return back()->with('msg','Code Posted Successfully');
}
//User Payment page view
function Payment(){
    $pays=UserPayment::all();
    return view('user/dashboard/payment',compact('pays'));
}

function userpayment(Request $request){
    UserPayment::insert([
        'amount'=>$request->amount,
        'pay_number'=>$request->pay_number,
        'pay_method'=>$request->pay_method,
       ]);
       return back()->with('msg','Successfully Requested');
}



}
