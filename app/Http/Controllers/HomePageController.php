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
    public function welcome()
    {
        $packages=Package::all();
        return view('font_end.pages.home',compact('packages'));
    }

    function aboutpage(){
         
            return view('font_end.pages.about'); 
        
        
    }
    function reviewpage(){
        return view('font_end.pages.review'); 
    }

    function workpage(){
        return view('font_end.pages.work'); 
    }
    function  depositpage(){
        return view('font_end.pages.deposit'); 
    }

    function   withdrawpage(){
        return view('font_end.pages.withdraw'); 
    }
    
    function investpage(){
        return view('font_end.pages.investment'); 
    }

    function faqpage(){
        return view('font_end.pages.faq');
    }

    function blogpage(){
        return view('font_end.pages.blog');
    }
    function blogdetailspage(){
        return view('font_end.pages.blog_details');
    }

        function contactpage(){
        return view('font_end.pages.contact'); 
    }
    
    function termspage(){
        return view('font_end.pages.terms'); 
    }

    function userinvestment(){
        return view('font_end.pages.user_investment'); 
    }   
    
    function payment($id){


            $packege = Package::where("id",$id)->first();
        // $test = Package::find($id);

        // $s = $r->session()->put('p_name',$test->package_name);

        // $g = $r->session()->get('p_name');

        //     dd($g);
        // $packages=Package::all();
        // $manage=ManageAd::all();
       
        return view('font_end.pages.payment',compact('packege'));
    }


    function paymentpost(Request $request){
    //   $package_id=Package::find($request->id);
    //   $s = $request->session()->put('p_name',$package_id->id);
    //   $g = $request->session()->get('p_name');
    //   dd($g);
     
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
    

}