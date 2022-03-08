<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDashboard;
use App\Http\Controllers\adminController;
use App\Http\Controllers\{
    HomePageController,
};
// For All  Cache Clear
Route::get('clear-all', function () {
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('clear-compiled');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    dd('Cached Cleared');
});

// Start HomePage  Contrller Routing
Route::get('/',[HomePageController::class,'welcome'])->name('welcome');
Route::get('/about',[HomePageController::class,'aboutpage']);
Route::get('/work',[HomePageController::class,'workpage']);
Route::get('/invest',[HomePageController::class,'investpage']);
Route::get('/faq',[HomePageController::class,'faqpage']);
Route::get('/blog',[HomePageController::class,'blogpage']);
Route::get('/blog-details',[HomePageController::class,'blogdetailspage']);
Route::get('/contact',[HomePageController::class,'contactpage']);
Route::get('/review',[HomePageController::class,'reviewpage']);
Route::get('/terms',[HomePageController::class,'termspage']);
Route::get('deposit',[HomePageController::class,'depositpage']);
Route::get('user/withdraw',[HomePageController::class,'withdrawpage']);
Route::get('user/invest',[HomePageController::class,'userinvestment']);
Route::get('/payment/{id}',[HomePageController::class,'payment']);
Route::post('payment/post',[HomePageController::class,'paymentpost']);
// End Homepage Controller Routing

// HomeController Routing Start
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// HomeController Routing End



// Start adminController Routing
Route::get('admin/login',[addminController::class,'adminLogin']);
Route::get('/admin/createpackage',[adminController::class,'createpackage']);
Route::get('/admin/listpackage',[adminController::class,'listpackage']);
Route::get('/create/ads',[adminController::class,'createads']);
Route::get('/create/ads',[adminController::class,'createads']);
Route::get('/view/ads',[adminController::class,'viewads']);
Route::get('/investor/list',[adminController::class,'investor']);
Route::get('/panding/list',[adminController::class,'pandinginvestor']);
Route::get('/withdraw',[adminController::class,'withdraw']);
Route::get('/deposit',[adminController::class,'deposit']);
Route::get('/create/user',[adminController::class,'createuser']);
Route::get('/manage/user',[adminController::class,'manageuser']);
Route::get('/block/user',[adminController::class,'blockuser']);
Route::get('/manage/ads',[adminController::class,'manageads']);
Route::post('/manage/ads',[adminController::class,'manageadspost']);
Route::get('/manage/delete/{manage_id}',[adminController::class,'manageAddelete']);
Route::post('manage/ads/edit',[adminController::class,'manageAdedit']);
Route::get('manage/edit/{manage_edit}',[adminController::class,'manageAdeditpage']);
Route::post('create/package',[adminController::class,'Package']);
Route::get('package/delete/{package_id}',[adminController::class,'PackageDelete']);
Route::get('package/edit/{package_id}',[adminController::class,'PackageEditPage']);
Route::post('package/update',[adminController::class,'packageUpdate']);
Route::post('create/ads',[adminController::class,'PostAds']);
Route::get('edit/ads/{edit_id}',[adminController::class,'editPage']);
Route::post('edit/ads',[adminController::class,'updateads']);
Route::get('delete/ads/{delete_ads}',[adminController::class,'deleteads']);
Route::get('delete/investor/{p_id}',[adminController::class,'investordelete']);
Route::get('approve/investor/{id}',[adminController::class,'admininvestor']);
// End admi Controller Routing

// Route::get('pages/about',[HomePageController::class,' aboutpage']);ages.about
Route::get('/admin', function () {
    return view('backend.pages.home');
});
Route::get('/admin/package', function () {
    return view('backend.pages.package');
});

// user Dashboard  Controller Routing start
Route::get('user/dashboard',[UserDashboard::class,'userdasboard']);
Route::get('user/deposit',[UserDashboard::class,'userdeposit']);
Route::get('user/invest',[UserDashboard::class,'userinvest']);
Route::get('user/withdraw',[UserDashboard::class,'userwithdraw']);
Route::get('user/transection',[UserDashboard::class,'usertransection']);
Route::get('user/notification',[UserDashboard::class,'usernotification']);
//Route code page
Route::get('code',[UserDashboard::class,'code']);
Route::post('code/post',[UserDashboard::class,'codepost']);
Route::get('user/payment',[UserDashboard::class,'Payment']);
Route::post('withdraw/request',[UserDashboard::class,'withdrawpost']);
Route::post('user/payment',[UserDashboard::class,'userpayment']);



// user Dashboard  Controller Routing End




