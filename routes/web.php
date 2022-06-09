<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RedacteurController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Models\Categorie;
use App\Models\Course;
use App\Models\Event;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
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
require __DIR__.'/auth.php';
// HOME
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/coursesMain', [HomeController::class, 'coursesMain'])->name('coursesMain');
Route::get('/eventsMain', [HomeController::class, 'eventsMain'])->name('eventsMain');
Route::get('/newsMain', [HomeController::class, 'newsMain'])->name('newsMain');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
// filters
Route::post('/courses/findCat', [HomeController::class, 'filterCatCourse'])->name('filterCatCourse');
Route::post('/events/findCat', [HomeController::class, 'filterCatEvent'])->name('filterCatEvent');
Route::post('/posts/findCat', [HomeController::class, 'filterCatPost'])->name('filterCatPost');
Route::post('/posts/findTag', [HomeController::class, 'filterTagPost'])->name('filterTagPost');
// Slider
Route::resource('sliders', SliderController::class);
// Service
Route::resource('services', ServiceController::class);
// Role
Route::resource('roles', RoleController::class);
// Prof
Route::get('/profs/{id}/onepage', [ProfController::class, 'onepage'])->name('prof.onepage');
Route::resource('profs', ProfController::class);
// Course
Route::get('/courses/{id}/onepage', [CourseController::class, 'onepage'])->name('course.onepage');
Route::resource('courses', CourseController::class);
// Post
Route::get('/posts/{id}/onepage', [PostController::class, 'onepage'])->name('post.onepage');
Route::get('/back/posts/search', [PostController::class, 'search'])->name('search');
Route::resource('posts', PostController::class);
// Redacteur
Route::resource('redacteurs', RedacteurController::class);
// Event
Route::get('/events/{id}/onepage', [EventController::class, 'onepage'])->name('event.onepage');
Route::resource('events', EventController::class);
// Icon
Route::get('/back/icons', [IconController::class, 'index'])->name('icon.index');
// // User
Route::resource('users', UserController::class);
// Message
Route::post('/back/messages/store2', [MessageController::class, 'store2'])->name('message.store2');
Route::post('/back/messages/{id}/updateReply', [MessageController::class, 'updateReply'])->name('message.updateReply');
Route::resource('messages', MessageController::class);
// Tag
Route::resource('tags', TagController::class);
// Categorie
Route::resource('categories', CategorieController::class);
// Email
Route::resource('emails', EmailController::class);
// Newsletter
Route::post('/contact-form', [NewsletterController::class, 'storeContactForm'])->name('contact-form.store');
// Demande
Route::post('/back/demandes/store2', [DemandeController::class, 'store2'])->name('demande.store2');
Route::get('/back/demandes/{id}/reply', [DemandeController::class, 'reply'])->name('demande.reply');
Route::resource('demandes', DemandeController::class);
// Commentaire
Route::resource('commentaires', CommentaireController::class);
// Contact
Route::resource('contacts', ContactController::class);
// ContactForm
Route::get('/back/contactforms/{id}/reply', [ContactFormController::class, 'reply'])->name('contactform.reply');
Route::post('/back/contactforms/{id}/mail', [ContactFormController::class, 'mail'])->name('contactform.mail');
Route::resource('contactforms', ContactFormController::class);