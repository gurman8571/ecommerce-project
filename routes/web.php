<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\food;
use App\Http\controllers\user;
use App\Http\Controllers\PaytmController;



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

Route::get('/', function () {
    if (session()->has('username')) {
        return redirect('home');
    }
    else {
    
    return view('register');
    }
});
Route::post("login",[food::class,'login']);

route::view("layout","layout");
route::view("home","home");

Route::get("layout",[food::class,'list']);


route::view("category","category");
Route::get("category",[food::class,'category']);
Route::get("categoryaudio",[food::class,'categoryaudio']);
Route::get("categorylcd",[food::class,'categorylcd']);
Route::get("categorymachine",[food::class,'categorymachine']);
Route::get("home",[food::class,'home']);
route::view("profile","profile");
Route::get('profile',[food::class,"profile"]);
route::view("search","search");
Route::get("search",[food::class,'search']);
route::view("detail/{id}","detail");
Route::get("detail/{id}",[food::class,'detail']);
Route::post("addtocart",[food::class,'addtocart']);
Route::get("cart",[food::class,'cartlist']);
Route::get("removecart/{id}",[food::class,'removecart']);

route::view("payment","payment");
Route::get("order",[food::class,'order']);
Route::post("paymentdone",[food::class,'paymentdone']);



route::view('final','final');
Route::get("myorders",[food::class,'myorders']);

route::view('registration','registration');
Route::post("regis",[food::class,'regis']);
route::view('productfilter','pricefilter');
Route::get("pricefilterdesc",[food::class,'costfilterdesc']);
Route::get("pricefilteraesc",[food::class,'costfilteraesc']);
Route::get('logout', function () {
    if (session()->has('username')) {
        session()->pull('username');
        return redirect('home');
    }
    else {
        return redirect('/');
    }
});
Route::post("comment",[food::class,'comment']);
Route::post('paytm-payment',[PaytmController::Class, 'paytmPayment'])->name('paytm.payment');
Route::post('paytm-callback',[PaytmController::Class, 'paytmCallback'])->name('paytm.callback');
Route::get('paytm-purchase',[PaytmController::Class, 'paytmPurchase'])->name('paytm.purchase');


