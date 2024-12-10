<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResumeController;
// use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;
use App\Http\Controllers\DashBoardController;
// Page Routes
Route::get('/', [HomeController::class,'page']);
Route::get('/contact', [ContactController::class,'page']);
Route::get('/projects', [ProjectController::class,'page']);
Route::get('/resume', [ResumeController::class,'page']);


// Ajax Call Routes
Route::get('/heroData', [HomeController::class,'heroData']);
Route::get('/aboutData', [HomeController::class,'aboutData']);
Route::get('/socialData', [HomeController::class,'socialData']);
Route::get('/projectsData', [ProjectController::class,'projectsData']);
Route::get('/resumeLink', [ResumeController::class,'resumeLink']);
Route::get('/experiencesData', [ResumeController::class,'experiencesData']);
Route::get('/educationData', [ResumeController::class,'educationData']);
Route::get('/skillsData', [ResumeController::class,'skillsData']);
Route::get('/languageData', [ResumeController::class,'languageData']);
Route::post('/contactRequest', [ContactController::class,'contactRequest']);

//Admin tamplate


// Web API Routes
Route::post('/user-registration',[UserController::class,'UserRegistration']);
Route::post('/user-login',[UserController::class,'UserLogin']);
Route::post('/send-otp',[UserController::class,'SendOTPCode']);
Route::post('/verify-otp',[UserController::class,'VerifyOTP']);
Route::post('/reset-password',[UserController::class,'ResetPassword'])->middleware([TokenVerificationMiddleware::class]);

Route::get('/user-profile',[UserController::class,'UserProfile'])->middleware([TokenVerificationMiddleware::class]);

//Auth
Route::get('/admin',[UserController::class,'UserLogout']);
Route::get('/dashboard',[DashboardController::class,'DashboardPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/registration', [UserController::class,'RegistrationPage']);
Route::get('/sendOtp', [UserController::class,'sendOtpPage']);
Route::get('/verifyOtp', [UserController::class,'verifyOtpPage']);
Route::get('/resetPassword',[UserController::class,'ResetPasswordPage'])->middleware([TokenVerificationMiddleware::class]);









//Admin Deshboard
Route::get('/admin', [UserController::class,'LoginPage']);
Route::get('/userProfile',[UserController::class,'ProfilePage'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/user-update',[UserController::class,'UpdateProfile'])->middleware([TokenVerificationMiddleware::class]);

Route::post('/user-registration',[UserController::class,'UserRegistration']);
Route::get('/dashboard',[dashBoardController::class,'dasboardPage'])->middleware([TokenVerificationMiddleware::class]);
