<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
//*HOD registration route start here*//
Route::get('hodRegistration','App\Http\Controllers\hodRegistrationtController@create')->name('hodRegistration');
Route::post('save','App\Http\Controllers\hodRegistrationtController@save')->name('save');
//*HOD registration route end here*//


//*Staff registration route start here*//
Route::get('staffRegistration','App\Http\Controllers\staffRegistrationtController@create')->name('staffRegistration');
Route::post('saveStaff','App\Http\Controllers\staffRegistrationtController@save')->name('saveStaff');
//*Stadd registration route end here*//

//*login route start here *//
Route::get("login",'App\Http\Controllers\hodAndStaffLoginController@loginView');
Route::post('login', 'App\Http\Controllers\hodAndStaffLoginController@authonticate')->name('login');
//*login route end here*//

//*HOD dashboard route start here*//
Route::get('dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
//*dashboard route end here*//

//* staff mangement by admin route start here*//
Route::get('staffMangement','App\Http\Controllers\StaffController@index')->name('staffMangement');
Route::get('staff/create','App\Http\Controllers\StaffController@create')->name('staff/create');
Route::post('staff/save','App\Http\Controllers\StaffController@save')->name('staff/save');
Route::get('staff/edit/{id}','App\Http\Controllers\StaffController@edit');
Route::post('staff/delete/{id}','App\Http\Controllers\StaffController@destroy')->name('user-delete');
//* staff mangement by admin route end here*//

//*Leave mangement for staff route start here*//
Route::get('staffLeaveMagement','App\Http\Controllers\StaffLeaveMangementController@index')->name('staffLeaveMagement');
Route::get('staffLeaveMagement/create','App\Http\Controllers\StaffLeaveMangementController@create')->name('staffLeaveMagement/create');
Route::post('staffLeaveMagement/save','App\Http\Controllers\StaffLeaveMangementController@save')->name('staffLeaveMagement/save');
Route::get('staffLeaveMagement/edit/{id}','App\Http\Controllers\StaffLeaveMangementController@edit');
//*Leave mangement for staff route end here*//


//*Staff dashboard route start here*//
Route::get('staffdashboard','App\Http\Controllers\staffDashboardController@index')->name('staffdashboard');
//*Staff dashboard route end here*//

//*Leave mangement for HOD route start here*//
Route::get('hodLeaveMagement','App\Http\Controllers\hodLeaveMangementController@index')->name('hodLeaveMagement');
Route::get('hodLeaveMagement/edit/{id}','App\Http\Controllers\hodLeaveMangementController@edit');
Route::post('hodLeaveMagement/edit/{id}','App\Http\Controllers\hodLeaveMangementController@update');
//*Leave mangement for HOD route start here*//