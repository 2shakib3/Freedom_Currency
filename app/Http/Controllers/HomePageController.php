<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Payment;
use App\Models\ManageAd;
use Carbon\Carbon;
use Auth;

class HomePageController extends Controller
{
    //view welcome page
    public function welcome()
    {
        $packages=Package::all();
        return view('font_end.pages.home',compact('packages'));
    }
//view about page
    function aboutpage(){
            return view('font_end.pages.about'); 
    }
    //view Review page
    function reviewpage(){
        return view('font_end.pages.review'); 
    }

    //view work page
    function workpage(){
        return view('font_end.pages.work'); 
    }
    //view deposit page
    function  depositpage(){
        return view('font_end.pages.deposit'); 
    }
//viw withdraw page
    function   withdrawpage(){
        return view('font_end.pages.withdraw'); 
    }
    //view invest page
    function investpage(){
        return view('font_end.pages.investment'); 
    }
//view faqpage
    function faqpage(){
        return view('font_end.pages.faq');
    }
//view blogpage
    function blogpage(){
        return view('font_end.pages.blog');
    }
    //view blog details page
    function blogdetailspage(){
        return view('font_end.pages.blog_details');
    }
//view contact page
        function contactpage(){
        return view('font_end.pages.contact'); 
    }
//view terms page
    function termspage(){
        return view('font_end.pages.terms'); 
    }
//view userinvest page
    function userinvestment(){
        return view('font_end.pages.user_investment'); 
    }   
    //view payment page
    function payment($id){
         $packege = Package::where("id",$id)->first();
        return view('font_end.pages.payment',compact('packege'));
    }
    function paymentpost(Request $request){
      Payment::insert([
        'user_id'=>Auth::id(),
        'package_name'=>$request->package_name,
        'amount'=>$request->amount,
        'pay_method'=>$request->pay_method,
        'pay_number'=>$request->pay_number,
        'status'=>2,
        'created_at'=>Carbon::now(),
     ]);
     
        return back();
    }
    //End payment page Function

     

}