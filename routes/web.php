<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userIdentifierController;
use App\Http\Controllers\signup_signinController;
use App\Http\Controllers\patientController;
use App\Http\Controllers\doctorController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\appointmentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/forgotPassword', function () {
    return view('forgotPass');
});

Route::get('/appointment', function () {
    return view('appointment');
})->name('appointment');




Route::get('/admindashboard', [userIdentifierController::class, 'userLoader'])->name('adminindex');
Route::get('/adminProfile', [userIdentifierController::class, 'adminLoader'])->name('adminProfile');
Route::get('/adminPatients', [adminController::class, 'patientList'])->name('adminPatList');
Route::get('/adminDoctors', [adminController::class, 'doctorList'])->name('adminDocList');
// Route::get('/patientslist', [userIdentifierController::class, 'patLoader'])->name('adminPatList');
Route::get('/doctorslist', [userIdentifierController::class, 'docLoader'])->name('adminDocList');
Route::get('/doctordashboard', [userIdentifierController::class, 'docIndex'])->name('doctorindex');
Route::get('/patientdashboard', [userIdentifierController::class, 'patIndex'])->name('patientindex');
Route::get('/DocPatientslist', [doctorController::class, 'appointList'])->name('doctorPatList');
Route::get('/patProfile', [userIdentifierController::class, 'patProfile'])->name('profile');
Route::get('/patReport', [userIdentifierController::class, 'patReport'])->name('report');
Route::get('/presHistory', [userIdentifierController::class, 'prescriptionHistory'])->name('presHistory');
Route::get('/presHistory', [patientController::class, 'prescriptionHistory'])->name('presHistory');
Route::get('/appointHistory', [patientController::class, 'appointHistory'])->name('appointHistory');
Route::get('/docProfile', [userIdentifierController::class, 'docProfile'])->name('docProfile');
Route::get('/DocDoctorslist', [doctorController::class, 'doctorList'])->name('doctorDocList');
Route::get('/PatDoctorslist', [patientController::class, 'doctorList'])->name('patientDocList');
Route::get('/adminDoctorslist', [adminController::class, 'doctorList'])->name('adminDocList');
Route::get('/signin', [userIdentifierController::class, 'signout'])->name('signout');

Route::post('/signupPD', [signup_signinController::class, 'store'])->name('signupPatDoc');
Route::post('/dashboard', [signup_signinController::class, 'signin'])->name('dashboard');
Route::post('/LoadDoctorListqwe', [appointmentController::class, 'load_doctorList'])->name('loadDoctor');
Route::post('/appointHistory', [appointmentController::class, 'storeAppointment'])->name('appointStored');
Route::post('/patDetails', [doctorController::class, 'loadPatientDetails'])->name('loadPatDetails');
Route::post('/prescriptions', [doctorController::class, 'loadPrescription'])->name('prescription');
Route::post('/statusUpdate', [doctorController::class, 'acceptReject'])->name('status');
Route::post('/addPrescription', [userIdentifierController::class, 'newPrescription'])->name('addPrescription');
Route::post('/viewPrescription', [userIdentifierController::class, 'viewPrescription'])->name('vPrescription');
