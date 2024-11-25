<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Section1Controller;
use App\Http\Controllers\Section2Controller;
use App\Http\Controllers\Section3Controller;
use App\Http\Controllers\Section4_1Controller;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\Section5Controller;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\DataController;

use App\Http\Controllers\AdminController;

Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.post');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::middleware(['admin'])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin.admin_dashboard');
    })->name('admin.dashboard');

    Route::resource('experiences', ExperienceController::class);
    Route::resource('contact_form', ContactFormController::class);
    Route::resource('section5', Section5Controller::class);
    Route::resource('skills', SkillController::class);
    Route::resource('section3s', Section3Controller::class);
    Route::resource('section4_1s', Section4_1Controller::class);
    Route::resource('section2s', Section2Controller::class);
    Route::resource('section1s', Section1Controller::class);
});

Route::get('/', [DataController::class, 'getAllData']) -> name("/");
Route::post('/', [DataController::class, 'store'])->name('contact.store');

