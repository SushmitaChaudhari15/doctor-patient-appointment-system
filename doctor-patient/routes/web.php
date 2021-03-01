<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorScheduleController;
use App\Http\Middleware\Doctor1;

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

Route::get('/dashboard_old', function () {
    return view('dashboard_old');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('front.dashboard');
});


Route::get('/about', function () {
    return view('front.about');
});


Route::get('/appointment', function () {
    return view('front.appointment');
});


Route::get('/contact', function () {
    return view('front.contact');
});


Route::get('/services', function () {
    return view('front.services');
});


// Route::get('/dashboard', function () {
//     return view('front.dashboard');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', function () {
    return view('front.dashboard');
})->name('dashboard');


Route::group(['middleware'=>'user_auth'],function(){
Route::post('appointment_submit',[AppointmentController::class,'appointment_submit']);
});

Route::middleware(['auth:sanctum', 'verified' ])->get('/doctor/dashboard', function () {
    return view('doctor.dashboard');
})->name('doctor.dashboard');


Route::group(['middleware'=>'user_auth'],function(){
    
Route::get('/doctor/doctor', function () {
    return view('doctor.doctor');
});


Route::get('/doctor/patient',[AppointmentController::class,'indexpatient']);
Route::get('doctor/patient/manage_patient',[AppointmentController::class,'manage_patient']);
Route::get('doctor/patient/manage_patient/{id}',[AppointmentController::class,'manage_patient']);
Route::post('doctor/patient/manage_patient_process',[AppointmentController::class,'manage_patient_process'])->name('patient.manage_patient_process');
Route::get('doctor/patient/delete/{id}',[AppointmentController::class,'deletepatient']);

Route::get('/doctor/appointment',[AppointmentController::class,'index']);
Route::get('/doctor/appointment/delete/{id}',[AppointmentController::class,'delete']);
Route::get('/doctor/appointment/status/{status}/{id}',[AppointmentController::class,'status']);


   
Route::get('/doctor/schedule',[DoctorController::class,'index']);
Route::get('doctor/schedule/manage_schedule',[DoctorController::class,'manage_schedule']);
Route::get('doctor/schedule/manage_schedule/{id}',[DoctorController::class,'manage_schedule']);
Route::post('doctor/schedule/manage_schedule_process',[DoctorController::class,'manage_schedule_process'])->name('schedule.manage_schedule_process');
Route::get('doctor/schedule/delete/{id}',[DoctorController::class,'delete']);



 

});
