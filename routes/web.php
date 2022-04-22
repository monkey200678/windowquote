<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CalcvalueController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

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
//
//Route::get('/', function () {
//    return view('auth.login');
//});

// Auth::routes();

// Route::get('cache_clear', function () {
//     \Artisan::call('config:clear');
//     \Artisan::call('cache:clear');
//     \Artisan::call('route:clear');
//     \Artisan::call('view:clear');
//     \Cache::flush();
//     \Artisan::call('clear-compiled');
// });

Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'index']);

Route::get('login', function (){
    return view('auth.login');
});

//admin route
Route::post('login', [LoginController::class, 'login'])->name('login')->middleware('auth');

Route::resource('location', LocationController::class)->middleware('auth');
Route::post('location/update', [LocationController::class, 'updates'])->name('location.updates')->middleware('auth');

Route::resource('calc', CalcvalueController::class)->middleware('auth');


//frontend route
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('frontend.home');
Route::get('main-calc/{initialize?}', [App\Http\Controllers\HomeController::class, 'mainCalc'])->name('front.main-calc');
Route::get('sub-calc/{calc_type?}', [App\Http\Controllers\HomeController::class, 'subCalc'])->name('front.sub-calc');
Route::get('individual-calc/{calc_type?}', [App\Http\Controllers\HomeController::class, 'individualCalc'])->name('front.individual-calc');
Route::post('result', [App\Http\Controllers\HomeController::class, 'result'])->name('front.result');
Route::post('add-more', [App\Http\Controllers\HomeController::class, 'addMore'])->name('front.add-more');
Route::get('checkout', [App\Http\Controllers\HomeController::class, 'checkOut'])->name('front.checkout');

Route::match(['get','post'], 'individual-calc-second/{calc_type?}', [App\Http\Controllers\HomeController::class, 'individualSecond'])->name('front.individual-calc-second');

Route::match(['get','post'], 'individual-calc-third/{win_type?}', [App\Http\Controllers\HomeController::class,'individualThird'])->name('front.individual-calc-third');

Route::match(['get','post'], 'individual-calc-fourth/{win_type?}', [App\Http\Controllers\HomeController::class, 'individualFourth'])->name('front.individual-calc-fourth');

Route::match(['get','post'], 'individual-calc-fifth/', [App\Http\Controllers\HomeController::class, 'individualFifth'])->name('front.individual-calc-fifth');

Route::post('individual-calc-final/', [App\Http\Controllers\HomeController::class, 'individualFinal'])->name('front.individual-calc-final');

Route::match(['get', 'post'], 'get-quotes/', [App\Http\Controllers\HomeController::class, 'getQuotes'])->name('front.get-quotes');

Route::match(['get', 'post'],'join/', [App\Http\Controllers\HomeController::class, 'join'])->name('front.join');

Route::get('retrieve-quote/', [App\Http\Controllers\RetrieveController::class, 'retrieve_quote'])->name('front.retrieve-quote');

Route::match(['get', 'post'], 'disclosure/', [App\Http\Controllers\HomeController::class, 'disclosure'])->name('front.disclosure');
Route::match(['get', 'post'], 'contractor-portal-home/', [App\Http\Controllers\HomeController::class, 'contractor_home'])->name('front.contractor-portal-home');
Route::match(['get', 'post'], 'store/', [App\Http\Controllers\HomeController::class, 'displayContractorStore'])->name('front.contractor-store');
Route::match(['get', 'post'], 'jobs/', [App\Http\Controllers\HomeController::class, 'displayContractorStore'])->name('front.contractor-jobs');
Route::match(['get', 'post'], 'profile/', [App\Http\Controllers\HomeController::class, 'displayContractorStore'])->name('front.contractor-profile');
Route::match(['get', 'post'], 'benefits/', [App\Http\Controllers\HomeController::class, 'displayContractorStore'])->name('front.contractor-benefits');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
