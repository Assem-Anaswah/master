<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\home\HomeController;
use App\http\Controllers\home\clientController;
use App\http\Controllers\home\ContactController;
use App\http\Controllers\home\AboutController;
use App\http\Controllers\home\ServicesController;
use App\http\Controllers\admin\DashboardController;
use App\http\Controllers\admin\TablesController;
use App\http\Controllers\admin\profileController;
use App\http\Controllers\admin\RtlController;
use App\http\Controllers\admin\BillingController;
use App\http\Controllers\admin\NotificationsController;
use App\http\Controllers\admin\VirtualrealityController;
use App\Http\Controllers\home\ProfileuserController;
use App\Http\Controllers\SingupController;
use App\http\Controllers\LoginController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/', HomeController::class);
Route::resource('/client', clientController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/about', AboutController::class);
Route::resource('/Srvices', ServicesController::class);

Route::resource('/Admin', DashboardController::class);
Route::resource('/Tables', TablesController::class);
Route::resource('/Rtl', RtlController::class);
Route::resource('/Virtual-reality', VirtualrealityController::class);

Route::resource('/Billing',BillingController::class);
Route::resource('/profile',profileController::class);
Route::resource('/Notifications',NotificationsController::class);
Route::resource('/Signup', SingupController::class);
Route::resource('/login', LoginController::class);




Route::get('/login', [LoginController::class, 'index'])->name('sign-up.index');
Route::post('/register', [SingupController::class, 'store'])->name('sign-up');
Route::post('/login/check', [LoginController::class, 'check'])->name('login.check');


Route::get('/logout', function () {
    auth()->logout();  // Logout the user

    session()->invalidate();  // Invalidate the session
    session()->regenerateToken();  // Regenerate the CSRF token

    return redirect('/');  // Redirect to the home page or any other desired page
})->name('logout');



Route::resource('/user-profile',ProfileuserController::class);

Route::get('/test', [LoginController::class, 'index'])->name('test.index');
