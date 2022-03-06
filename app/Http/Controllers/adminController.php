<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Ad;
use App\Models\ManageAd;
use App\Models\Payment;
use Carbon\carbon;

class adminController extends Controller
{
 function adminLogin(){
     return view('admin.login');
 }
 function createpackage(){
     $packages=Package::all();
     return view('backend.pages.createpackage',compact('packages'));
 }
 function listpackage(){
     $packages=Package::all();
    return view('backend.pages.listpackage',compact('packages'));
}
function createads(){
    return view('backend.pages.createads');
}
function viewads(){
    $ads=Ad::all();
    return view('backend.pages.viewads',compact('ads'));
}


function manageads(){
    $packages=Package::all();
    $manages=ManageAd::all();
    return view('backend.pages.manageads',compact('packages','manages'));
}
function manageAddelete($manage_id){
    ManageAd::find($manage_id)->delete();
    return back();
}

function  manageAdeditpage($manage_edit){

    $packages=Package::all();
   $old_manages= ManageAd::find($manage_edit);

//    dd($old_manages->status);

//    $message="Update successfully";
    return view('backend.pages.manageAdedit',compact('packages','old_manages'))->with('message','Update successfully.');
}

function manageAdedit(Request $request){

    // dd($request);
    ManageAd::find($request->manage_id)->update([
      'package_id'=>$request->package_id,
      'ads_amount'=>$request->ads_amount,
      'status'=>$request->status,
    ]);
    return back();

}



function manageadspost(Request $request){
    $manage=new ManageAd;
    $manage->package_id=$request->package_id;
    $manage->ads_amount=$request->ads_amount;
    $manage->status=$request->status;
    if($manage->save()){
    }
//   dd($request->all());
    return back();
}


function PostAds(Request $request){
      $request->validate([
          'title'=>'required',
          'subtitle'=>'required',
          'description'=>'required',
         'link'=>'required',
         'per_click'=>'required',
         'validity'=>'required',

      ],
      [
          'title.required'=>'Please Enter title',
          'subtitle.required'=>'please Enter the Subtitle',
          'description.required'=>'please Enter Description',
          'link.required'=>'please Enter your Link',
          'per_click.required'=>'Enter Per click',
          'validity.required'=>'Enter validity',
      ]);
    $add = new Ad();
    if ($request->hasFile('ads_image')) {
        $image=$request->file('ads_image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/ads_image/');
        $imagepath =$image->move($destinationPath, $name);
        $addimage='/uploads/ads_image/'.$name;
        $add->ads_image = $addimage;
    }

      $add->title=$request->title;
      $add->sub_title=$request->subtitle;
      $add->description=$request->description;
      $add->per_click=$request->per_click;
      $add->link=$request->link;
      $add->video=$request->video;
      $add->validity=$request->validity;
      if($add->save()){
      }
   return back();
}
 function editPage($edit_id){
     $old_ads=Ad::find($edit_id);
     return view('backend.pages.editads',compact('old_ads'));
 }

 function updateads(Request $request){

    if ($request->hasFile('ads_image')) {

        $image=$request->file('ads_image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/ads_image/');
        $imagepath =$image->move($destinationPath, $name);
        $addimage='/uploads/ads_image/'.$name;
       Ad::find($request->ads_id)->update([
        'ads_image'=> $addimage,
       ]);
    }
     Ad::find($request->ads_id)->update([
        'title'=>$request->title,
       'sub_title'=>$request->subtitle,
        'description'=>$request->description,
        'video'=>$request->video,
        'per_click'=>$request->per_click,
      ' link'=>$request->link,
      'validity'=>$request->validity,

     ]);

     return back();
 }
 function deleteads($delete_ads){
     Ad::find($delete_ads)->delete();
     return back();
 }

function investor(){
    $investors=Payment::all();
    return view('backend.pages.investor',compact('investors'));
}
function  investordelete($p_id){
    Payment::find($p_id)->delete();
    return back();
}
function admininvestor($id){
  $approve=Payment::select('status')->where('id',$id)->first();
  if($approve->status==2){
      $status=1;
  }
  else{
    $status=2;
  }
  Payment::where('id',$id)->update([
      'status'=>$status
  ]);
  return back();
 }

function pandinginvestor(){
    return view('backend.pages.pandinginvestor');
}
function withdraw(){
    return view('backend.pages.withdraw');
}
function deposit(){
    return view('backend.pages.deposit');
}
function createuser(){
    return view('backend.pages.createuser');
}
function manageuser(){
    return view('backend.pages.manageuser');
}
function blockuser(){
    return view('backend.pages.blockuser');
}
// Start Post Method
function Package(Request $request){

    $request->validate([
        'package_name'=>'required',
        'revenue_percent'=>'required|numeric',
        'invest'=>'required|numeric',
        'daily_income'=>'required|numeric',
        'validity'=>'required',
    ],
    [
        'package_name.required'=>'Enter Package name',
        'revenue_percent.required'=>'Enter Revenue Percent',
        'invest.required'=>'Enter Investment',
        'daily_income.required'=>'Enter Daily Income',
        'validity.required'=>'Enter validity',

    ]);

     Package::Insert([
       'package_name'=>$request->package_name,
       'revenue_percent'=>$request->revenue_percent,
       'invest'=>$request->invest,
       'daily_income'=>$request->daily_income,
       'validity'=>$request->validity
     ]);
     return Back();
}
function packageUpdate(Request $request){
    Package::find($request->package_id)->update([
        'package_name'=>$request->package_name,
        'revenue_percent'=>$request->revenue_percent,
        'invest'=>$request->invest,
        'daily_income'=>$request->daily_income,
        'validity'=>$request->validity
    ]);
    return back();
}
function PackageEditPage($package_id){
    $old_package=Package::find($package_id);
    return view('backend.pages.editpackage',compact('old_package'));
}
function packageDelete($package_id){
    Package::find($package_id)->delete();
    return back();
}
}
