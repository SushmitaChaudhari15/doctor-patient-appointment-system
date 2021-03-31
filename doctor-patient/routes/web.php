<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorScheduleController;
use App\Http\Controllers\ContactController;
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
// Route::get('/cache', function () {
//   Artisan::call('cache:clear');
// });

// Route::get('/storage', function () {
//   Artisan::call('storage:link');
// });


Route::get('/', [DoctorController::class,'dashboard']);


Route::get('/about',[DoctorController::class,'about']);

Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('appointment',[AppointmentController::class,'appointment']);

Route::post('/user/contact',[ContactController::class,'sendEmail']);

Route::get('/services', function () {
    return view('front.services');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function() {

    Route::get('user/dashboard',[DoctorController::class,'dashboard'])
  ->name('dashboard');

    Route::get('/appointment/{id}',[AppointmentController::class,'appointment'])->name('front.appointment');
    Route::post('appointment_submit',[AppointmentController::class,'appointment_submit']);
    Route::get('patient/appointment/{id}',[AppointmentController::class,'show_appointment']);
    
    
    Route::get('patient/patient_profile/{id}',[PatientController::class,'index'])->name('patient/patient_profile');
    Route::post('patient/manage_patient_profile_process',[PatientController::class,'manage_patient_profile_process']);
    Route::get('patient/manage_patient_profile/{id}',[PatientController::class,'manage_patient_profile']);
  
});


Route::middleware(['auth:sanctum', 'verified', 'doctor1' ])->group(function() {
    Route::get('/doctor/dashboard', function () {
                return view('doctor.dashboard');
            })->name('doctor.dashboard');

     Route::get('/doctor/dashboard',[DoctorController::class,'doctordash']);

    Route::get('/doctor/patient',[PatientController::class,'indexpatient']);
    Route::get('doctor/patient/delete/{id}',[PatientController::class,'deletepatient']);


    Route::get('/doctor/appointment',[AppointmentController::class,'index']);
    Route::get('/doctor/appointment/delete/{id}',[AppointmentController::class,'delete']);
    Route::get('/doctor/appointment/status/{status}/{id}',[AppointmentController::class,'status']);

    
    Route::get('/doctor/schedule',[DoctorScheduleController::class,'index']);
    Route::get('/doctor/schedule/status/{status}/{id}',[DoctorScheduleController::class,'status']);
    Route::get('/doctor/schedule/manage_schedule/{id}',[DoctorScheduleController::class,'manage_schedule']);
    Route::get('/doctor/schedule/manage_schedule',[DoctorScheduleController::class,'manage_schedule']);
    Route::post('/doctor/schedule/manage_schedule_process',[DoctorScheduleController::class,'manage_schedule_process'])->name('schedule.manage_schedule_process');
    Route::get('/doctor/schedule/delete/{id}',[DoctorScheduleController::class,'delete']);

    Route::get('/doctor/doctor_profile',[DoctorController::class,'index']);
    Route::get('/doctor/doctor_profile_manage',[DoctorController::class,'doctor_profile_manage']);
    Route::get('/doctor/doctor_profile_manage/{id}',[DoctorController::class,'doctor_profile_manage']);
    Route::post('/doctor/doctor_profile_manage_process',[DoctorController::class,'doctor_profile_manage_process'])->name('doctor.doctor_profile_manage_process');

    Route::get('/doctor/report',[PatientController::class,'report']);

    Route::get('/check_date/{id}',[PatientController::class,'check_date']);
    
    Route::get('/report_patient',[PatientController::class,'total_patient']);

    Route::get('/report_appointment',[PatientController::class,'total_appointment']);

    Route::get('/report_attend_patient',[PatientController::class,'total_attend_patient']);

    Route::get('/report_pending_patient',[PatientController::class,'total_pending_patient']);

   
});
