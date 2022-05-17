<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Models\Service;
use App\Models\Slider;

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
    $slides = Slider::all();
    $services = Service::all();
    return view('index', compact('slides', 'services'));
})->name("home");

Route::get('/courses', function () {
    return view('front/pages/courses-grid');
})->name("courses");

Route::get('/teachers', function () {
    return view('front/pages/our-teachers');
})->name("teachers");

Route::get('events', function () {
    return view('front/pages/classic-events');
})->name("events");

Route::get('news', function () {
    return view('front/pages/classic-news');
})->name("news");

Route::get('contact', function () {
    return view('front/pages/contact');
})->name("contact");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
// Slider
Route::get('/back/sliders', [SliderController::class, 'index'])->name('slider.index');
Route::get('/back/sliders/create', [SliderController::class, 'create'])->name('slider.create');
Route::post('/back/sliders/store', [SliderController::class, 'store'])->name('slider.store');
Route::get('/back/sliders/{id}/read', [SliderController::class, 'read'])->name('slider.read');
Route::get('/back/sliders/{id}/edit', [SliderController::class, 'edit'])->name('slider.edit');
Route::post('/back/sliders/{id}/update', [SliderController::class, 'update'])->name('slider.update');
Route::post('/back/sliders/{id}/delete', [SliderController::class, 'destroy'])->name('slider.destroy');
// Service
Route::get('/back/services', [ServiceController::class, 'index'])->name('service.index');
Route::get('/back/services/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('/back/services/store', [ServiceController::class, 'store'])->name('service.store');
Route::get('/back/services/{id}/read', [ServiceController::class, 'read'])->name('service.read');
Route::get('/back/services/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit');
Route::post('/back/services/{id}/update', [ServiceController::class, 'update'])->name('service.update');
Route::post('/back/services/{id}/delete', [ServiceController::class, 'destroy'])->name('service.destroy');
// Role
Route::get('/back/roles', [RoleController::class, 'index'])->name('role.index');
Route::get('/back/roles/{id}/read', [RoleController::class, 'read'])->name('role.read');
// Prof
Route::get('/back/profs', [ProfController::class, 'index'])->name('prof.index');
Route::get('/back/profs/create', [ProfController::class, 'create'])->name('prof.create');
Route::post('/back/profs/store', [ProfController::class, 'store'])->name('prof.store');
Route::get('/back/profs/{id}/read', [ProfController::class, 'read'])->name('prof.read');
Route::get('/back/profs/{id}/edit', [ProfController::class, 'edit'])->name('prof.edit');
Route::post('/back/profs/{id}/update', [ProfController::class, 'update'])->name('prof.update');
Route::post('/back/profs/{id}/delete', [ProfController::class, 'destroy'])->name('prof.destroy');
// 
Route::get('/back/s', [Controller::class, 'index'])->name('.index');
// Course
Route::get('/back/courses', [CourseController::class, 'index'])->name('course.index');
Route::get('/back/courses/create', [CourseController::class, 'create'])->name('course.create');
Route::post('/back/courses/store', [CourseController::class, 'store'])->name('course.store');
Route::get('/back/courses/{id}/read', [CourseController::class, 'read'])->name('course.read');
Route::get('/back/courses/{id}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::post('/back/courses/{id}/update', [CourseController::class, 'update'])->name('course.update');
Route::post('/back/courses/{id}/delete', [CourseController::class, 'destroy'])->name('course.destroy');
