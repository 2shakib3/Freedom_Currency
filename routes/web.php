<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDashboard;
use App\Http\Controllers\{
    HomePageController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('clear-all', function () {
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('clear-compiled');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    dd('Cached Cleared');
});
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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/login',[App\Http\Controllers\addminController::class,'adminLogin']);
Route::get('/admin/createpackage',[App\Http\Controllers\adminController::class,'createpackage']);
Route::get('/admin/listpackage',[App\Http\Controllers\adminController::class,'listpackage']);
Route::get('/create/ads',[App\Http\Controllers\adminController::class,'createads']);
Route::get('/create/ads',[App\Http\Controllers\adminController::class,'createads']);
Route::get('/view/ads',[App\Http\Controllers\adminController::class,'viewads']);
Route::get('/investor/list',[App\Http\Controllers\adminController::class,'investor']);
Route::get('/panding/list',[App\Http\Controllers\adminController::class,'pandinginvestor']);
Route::get('/withdraw',[App\Http\Controllers\adminController::class,'withdraw']);
Route::get('/deposit',[App\Http\Controllers\adminController::class,'deposit']);
Route::get('/create/user',[App\Http\Controllers\adminController::class,'createuser']);
Route::get('/manage/user',[App\Http\Controllers\adminController::class,'manageuser']);
Route::get('/block/user',[App\Http\Controllers\adminController::class,'blockuser']);
Route::get('/manage/ads',[App\Http\Controllers\adminController::class,'manageads']);
Route::post('/manage/ads',[App\Http\Controllers\adminController::class,'manageadspost']);
Route::get('/manage/delete/{manage_id}',[App\Http\Controllers\adminController::class,'manageAddelete']);
Route::post('manage/ads/edit',[App\Http\Controllers\adminController::class,'manageAdedit']);
Route::get('manage/edit/{manage_edit}',[App\Http\Controllers\adminController::class,'manageAdeditpage']);
//Admin Controller Post Mehod Routing Start
Route::post('create/package',[App\Http\Controllers\adminController::class,'Package']);
Route::get('package/delete/{package_id}',[App\Http\Controllers\adminController::class,'PackageDelete']);
Route::get('package/edit/{package_id}',[App\Http\Controllers\adminController::class,'PackageEditPage']);
Route::post('package/update',[App\Http\Controllers\adminController::class,'packageUpdate']);
Route::post('create/ads',[App\Http\Controllers\adminController::class,'PostAds']);
Route::get('edit/ads/{edit_id}',[App\Http\Controllers\adminController::class,'editPage']);
Route::post('edit/ads',[App\Http\Controllers\adminController::class,'updateads']);

Route::get('delete/ads/{delete_ads}',[App\Http\Controllers\adminController::class,'deleteads']);

Route::get('delete/investor/{p_id}',[App\Http\Controllers\adminController::class,'investordelete']);

Route::get('approve/investor/{id}',[App\Http\Controllers\adminController::class,'admininvestor']);







// Route::get('pages/about',[HomePageController::class,' aboutpage']);ages.about
Route::get('/admin', function () {
    return view('backend.pages.home');
});
Route::get('/admin/package', function () {
    return view('backend.pages.package');
});



// user Dashboard Routing start
Route::get('user/dashboard',[UserDashboard::class,'userdasboard']);


