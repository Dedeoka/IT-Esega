<?php

use App\Http\Controllers\Admin\PesanController as AdminPesanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesanController;
use App\Models\Notification;

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

//Landing Page
Route::get('/', function () {
    return view('welcome');
    })->name('landing');
Route::post('pesan',[App\Http\Controllers\Admin\PesanController::class, 'message'])->name('pesan-add');


Auth::routes();
Auth::routes(['verify' => true]);

//Route Mobile Legend User
Route::get('mobile-legends', [App\Http\Controllers\User\MobileLegendController::class, 'index'])->name('mole');
Route::post('mobile-legends', [App\Http\Controllers\User\MobileLegendController::class, 'addprocess'])->name('add-mole');
Route::get('mobile-legends-team/detail/{id}', [App\Http\Controllers\User\MobileLegendController::class, 'detail']);
Route::get('mobile-legends-team/update/{id}', [App\Http\Controllers\User\MobileLegendController::class, 'update']);
Route::patch('mobile-legends-team/update/{id}', [App\Http\Controllers\User\MobileLegendController::class, 'updateprocess']);
Route::get('mobile-legends-team/edit/{id}', [App\Http\Controllers\User\MobileLegendController::class, 'edit']);
Route::patch('mobile-legends-team/{id}', [App\Http\Controllers\User\MobileLegendController::class, 'editprocess']);

//Route Valorant User
Route::get('/valorant', [App\Http\Controllers\User\ValorantController::class, 'index'])->name('valo');
Route::post('valorant', [App\Http\Controllers\User\ValorantController::class, 'addprocess'])->name('add-valo');
Route::get('valorant-team/detail/{id}', [App\Http\Controllers\User\ValorantController::class, 'detail']);
Route::get('valorant-team/update/{id}', [App\Http\Controllers\User\ValorantController::class, 'update']);
Route::patch('valorant-team/update/{id}', [App\Http\Controllers\User\ValorantController::class, 'updateprocess']);
Route::get('valorant-team/edit/{id}', [App\Http\Controllers\User\ValorantController::class, 'edit']);
Route::patch('valorant-team/{id}', [App\Http\Controllers\User\ValorantController::class, 'editprocess']);

//Route Notification User
Route::get('/home', [HomeController::class, 'dashboard'])->name('home');
Route::get('notification', [App\Http\Controllers\User\NotificationController::class, 'index'])->name('notif');
Route::get('notification/detail/{title}', [App\Http\Controllers\User\NotificationController::class, 'detail'])->name('detail');

//Route Admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::get('logoutAdmin', [LoginAdminController::class, 'logoutAdmin'])->name('logoutadmin');

    //Route Mobile Legend
    Route::get('mobile-legends-team', [App\Http\Controllers\Admin\MobileLegendController::class, 'index'])->name('mole-admin');
    Route::get('mobile-legends-team/detail/{id}', [App\Http\Controllers\Admin\MobileLegendController::class, 'detail']);
    Route::get('mobile-legends-team/edit/{id}', [App\Http\Controllers\Admin\MobileLegendController::class, 'edit']);
    Route::patch('mobile-legends-team/{id}', [App\Http\Controllers\Admin\MobileLegendController::class, 'editprocess']);
    Route::patch('mobile-legends-team/approve/{id}', [App\Http\Controllers\Admin\MobileLegendController::class, 'approve']);
    Route::patch('mobile-legends-team/tolak/{id}', [App\Http\Controllers\Admin\MobileLegendController::class, 'tolak']);
    Route::delete('mobile-legends-team/{id}', [App\Http\Controllers\Admin\MobileLegendController::class, 'delete']);

    //Route Valorant
    Route::get('valorant-team', [App\Http\Controllers\Admin\ValorantController::class, 'index'])->name('valo-admin');
    Route::get('valorant-team/detail/{id}', [App\Http\Controllers\Admin\ValorantController::class, 'detail']);
    Route::get('valorant-team/edit/{id}', [App\Http\Controllers\Admin\ValorantController::class, 'edit']);
    Route::patch('valorant-team/{id}', [App\Http\Controllers\Admin\ValorantController::class, 'editprocess']);
    Route::patch('valorant-team/approve/{id}', [App\Http\Controllers\Admin\ValorantController::class, 'approve']);
    Route::patch('valorant-team/tolak/{id}', [App\Http\Controllers\Admin\ValorantController::class, 'tolak']);
    Route::delete('valorant-team/{id}', [App\Http\Controllers\Admin\ValorantController::class, 'delete']);

    //Route Notification
    Route::get('dashboard', [HomeController::class, 'dashboardAdmin'])->name ('dashboard');
    Route::get('notification/detail/{id}', [App\Http\Controllers\Admin\NotificationController::class, 'detail']);
    Route::post('notification', [App\Http\Controllers\Admin\NotificationController::class, 'addprocess'])->name('add-notif');
    Route::get('notification/edit/{id}', [App\Http\Controllers\Admin\NotificationController::class, 'edit']);
    Route::patch('notification/{id}', [App\Http\Controllers\Admin\NotificationController::class, 'editprocess']);
    Route::delete('notification/{id}', [App\Http\Controllers\Admin\NotificationController::class, 'delete']);

    //Route Pesan
    Route::get('pesan', [App\Http\Controllers\Admin\PesanController::class, 'index'])->name('pesan');
});

//Route login Admin
Route::get('/admin', [LoginAdminController::class, 'loginAdmin'])->name('loginadmin');
Route::post('actionlogin', [LoginAdminController::class, 'action'])->name('actionlogin');

