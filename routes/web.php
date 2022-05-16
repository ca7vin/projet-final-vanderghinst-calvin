<?php

use Illuminate\Support\Facades\Route;
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
});

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
