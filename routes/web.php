<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IconController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RedacteurController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Models\Course;
use App\Models\Event;
use App\Models\Post;
use App\Models\Prof;
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
    $popularcourses = Course::all()->random(4);
    $popularteachers = Prof::all()->random(4);
    $lastnews = Post::all()->last()->take(2)->get();
    return view('index', compact('slides', 'services', 'popularcourses', 'popularteachers', 'lastnews'));
})->name("home");

Route::get('/courses', function () {
    $courses = Course::paginate(9);
    return view('front/pages/courses-grid', compact('courses'));
})->name("courses");

Route::get('events', function () {
    $events = Event::paginate(6);
    return view('front/pages/classic-events', compact('events'));
})->name("events");

Route::get('news', function () {
    $news = Post::paginate(4);
    return view('front/pages/classic-news', compact('news'));
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
Route::get('/profs/{id}/onepage', [ProfController::class, 'onepage'])->name('prof.onepage');
Route::get('/back/profs/{id}/edit', [ProfController::class, 'edit'])->name('prof.edit');
Route::post('/back/profs/{id}/update', [ProfController::class, 'update'])->name('prof.update');
Route::post('/back/profs/{id}/delete', [ProfController::class, 'destroy'])->name('prof.destroy');
// Course
Route::get('/back/courses', [CourseController::class, 'index'])->name('course.index');
Route::get('/back/courses/create', [CourseController::class, 'create'])->name('course.create');
Route::post('/back/courses/store', [CourseController::class, 'store'])->name('course.store');
Route::get('/back/courses/{id}/read', [CourseController::class, 'read'])->name('course.read');
Route::get('/courses/{id}/onepage', [CourseController::class, 'onepage'])->name('course.onepage');
Route::get('/back/courses/{id}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::post('/back/courses/{id}/update', [CourseController::class, 'update'])->name('course.update');
Route::post('/back/courses/{id}/delete', [CourseController::class, 'destroy'])->name('course.destroy');
// Post
Route::get('/back/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/back/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/back/posts/store', [PostController::class, 'store'])->name('post.store');
Route::get('/back/posts/{id}/read', [PostController::class, 'read'])->name('post.read');
Route::get('/posts/{id}/onepage', [PostController::class, 'onepage'])->name('post.onepage');
Route::get('/back/posts/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::post('/back/posts/{id}/update', [PostController::class, 'update'])->name('post.update');
Route::post('/back/posts/{id}/delete', [PostController::class, 'destroy'])->name('post.destroy');
// Redacteur
Route::get('/back/redacteurs', [RedacteurController::class, 'index'])->name('redacteur.index');
Route::get('/back/redacteurs/create', [RedacteurController::class, 'create'])->name('redacteur.create');
Route::post('/back/redacteurs/store', [RedacteurController::class, 'store'])->name('redacteur.store');
Route::get('/back/redacteurs/{id}/read', [RedacteurController::class, 'read'])->name('redacteur.read');
Route::get('/back/redacteurs/{id}/edit', [RedacteurController::class, 'edit'])->name('redacteur.edit');
Route::post('/back/redacteurs/{id}/update', [RedacteurController::class, 'update'])->name('redacteur.update');
Route::post('/back/redacteurs/{id}/delete', [RedacteurController::class, 'destroy'])->name('redacteur.destroy');
// Event
Route::get('/back/events', [EventController::class, 'index'])->name('event.index');
Route::get('/back/events/create', [EventController::class, 'create'])->name('event.create');
Route::post('/back/events/store', [EventController::class, 'store'])->name('event.store');
Route::get('/back/events/{id}/read', [EventController::class, 'read'])->name('event.read');
Route::get('/events/{id}/onepage', [EventController::class, 'onepage'])->name('event.onepage');
Route::get('/back/events/{id}/edit', [EventController::class, 'edit'])->name('event.edit');
Route::post('/back/events/{id}/update', [EventController::class, 'update'])->name('event.update');
Route::post('/back/events/{id}/delete', [EventController::class, 'destroy'])->name('event.destroy');
// Icon
Route::get('/back/icons', [IconController::class, 'index'])->name('icon.index');
// User
Route::get('/back/users', [UserController::class, 'index'])->name('user.index');
Route::get('/back/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('/back/users/store', [UserController::class, 'store'])->name('user.store');
Route::get('/back/users/{id}/read', [UserController::class, 'read'])->name('user.read');
Route::get('/back/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/back/users/{id}/update', [UserController::class, 'update'])->name('user.update');
Route::post('/back/users/{id}/delete', [UserController::class, 'destroy'])->name('user.destroy');