<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\locationController;
use App\Http\Controllers\NotificationController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    // dashboard admin
    Route::get('/dashboard', [AdminController::class, 'admin'])->name('admin.dashboard');

    // notification admin
    Route::get('/notification', [NotificationController::class, 'getNotification'])->name('notification');
    Route::post('/notification-update', [NotificationController::class, 'updateNotification'])->name('update.notification');

    // patients location for admin
    Route::get('/patient-coordinates',[locationController::class, 'location'])->name('patient.location');
    Route::get('/patient', [AdminController::class, 'patient'])->name('patient.dashboard');
    Route::get('/rhu', [AdminController::class, 'rhu'])->name('rhu');
    Route::get('/my-appointment', [AdminController::class, 'myAppointment'])->name('appointment');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile-patient', [ProfileController::class, 'editPatient'])->name('profile.edit.patient');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile-patient', [ProfileController::class, 'updatePatient'])->name('profile.update.patient');

    Route::patch('/profile-clinic', [ClinicController::class, 'update'])->name('profile.clinic');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/announcement-public', [AdminController::class, 'announcementPatient'])->name('announcement.public');
Route::get('/dnd-public', [AdminController::class, 'dnd'])->name('dnd.public');


Route::get('/location', [locationController::class, 'location'])->name('location');
Route::get('/services', [ServiceController::class, 'services'])->name('services');
Route::get('/about', [AboutController::class, 'about'])->name('about');

require __DIR__.'/auth.php';
