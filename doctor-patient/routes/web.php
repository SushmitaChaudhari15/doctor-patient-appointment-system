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

Route::middleware(['auth:sanctum', 'verified'])->get('user/dashboard', function () {
    return view('front.dashboard');
})->name('dashboard');


Route::group(['middleware'=>'user_auth'],function(){
    // Route::get('appointment',[AppointmentController::class,'appointment']);
Route::get('/appointment/{id}',[AppointmentController::class,'appointment'])->name('front.appointment');;
 Route::post('appointment_submit',[AppointmentController::class,'appointment_submit']);


Route::get('patient/patient_profile',[PatientController::class,'index']);
Route::post('patient/manage_patient_profile_process',[PatientController::class,'manage_patient_profile_process']);
Route::get('patient/manage_patient_profile/{id}',[PatientController::class,'manage_patient_profile']);


});

Route::middleware(['auth:sanctum', 'verified','doctor1' ])->get('/doctor/dashboard', function () {
    
    return view('doctor.dashboard');
})->name('doctor.dashboard');


Route::group(['middleware'=>'user_auth'],function(){
 
Route::get('/doctor/dashboard',[AppointmentController::class,'indexdash']);

Route::get('/doctor/patient',[PatientController::class,'indexpatient']);
Route::get('doctor/patient/delete/{id}',[PatientController::class,'deletepatient']);


Route::get('/doctor/appointment',[AppointmentController::class,'index']);
Route::get('/doctor/appointment/delete/{id}',[AppointmentController::class,'delete']);
Route::get('/doctor/appointment/status/{status}/{id}',[AppointmentController::class,'status']);

   
Route::get('/doctor/schedule',[DoctorScheduleController::class,'index']);
Route::get('/doctor/schedule/status/{status}/{id}',[DoctorScheduleController::class,'status']);
Route::get('/doctor/schedule/manage_schedule/{id}',[DoctorScheduleController::class,'manage_schedule']);
Route::post('/doctor/schedule/manage_schedule_process',[DoctorScheduleController::class,'manage_schedule_process'])->name('schedule.manage_schedule_process');
Route::get('/doctor/schedule/delete/{id}',[DoctorScheduleController::class,'delete']);

Route::get('/doctor/doctor_profile',[DoctorController::class,'index']);
Route::get('/doctor/doctor_profile_manage/{id}',[DoctorController::class,'doctor_profile_manage']);
Route::post('/doctor/doctor_profile_manage_process',[DoctorController::class,'doctor_profile_manage_process'])->name('doctor.doctor_profile_manage_process');


});
