<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\RdvCourseController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RedacteurController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\RequestCourseController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Demande;
use App\Models\Event;
use App\Models\Message;
use App\Models\Post;
use App\Models\Prof;
use App\Models\Service;
use App\Models\Slider;
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

Route::get('/', function () {
    $slides = Slider::all();
    foreach ($slides as $slide) {
        $slide->title = str_replace("//", "<br>", $slide->title);
        $slide->text = str_replace("//", "<br>", $slide->text);
        
    } 
    $services = Service::all();
    $popularcourses = Course::all()->where("favori", "==", 1)->random(4);
    $popularteachers = Prof::all();
    $lastnews = Post::all()->last()->take(2)->get();
    $categories = Categorie::all();
    $courses = Course::all();
    return view('index', compact('slides', 'services', 'popularcourses', 'popularteachers', 'lastnews', 'categories', 'courses'));
})->name("home");

Route::get('/courses', function () {
    $courses = Course::paginate(9);
    $categories = Categorie::all();
    return view('front/pages/courses-grid', compact('courses', 'categories'));
})->name("courses");

global $actualCatCourse;
Route::post('/courses/findCat', function (Request $request) {
    $actualCatCourse = $request->category;
    $categories = Categorie::all();
    $courses = Course::whereHas('categories', function($element) use ($actualCatCourse) {
        $element->where('categories.id', $actualCatCourse);
    })->paginate(9);
    return view('front/pages/courses-grid', compact('courses', 'categories', 'actualCatCourse'));
})->name("filterCatCourse");

global $actualCatEvent;
Route::post('/events/findCat', function (Request $request) {
    $actualCatEvent = $request->category;
    $categories = Categorie::all();
    $events = Event::whereHas('categories', function($element) use ($actualCatEvent) {
        $element->where('categories.id', $actualCatEvent);
    })->paginate(6);
    return view('front/pages/classic-events', compact('events', 'categories', 'actualCatEvent'));
})->name("filterCatEvent");

global $actualCatPost;
Route::post('/posts/findCat', function (Request $request) {
    $actualCatPost = $request->category;
    $categories = Categorie::all();
    $tags = Tag::all();
    $news = Post::whereHas('categories', function($element) use ($actualCatPost) {
        $element->where('categories.id', $actualCatPost);
    })->paginate(4);
    return view('front/pages/classic-news', compact('news', 'categories', 'actualCatPost', 'tags'));
})->name("filterCatPost");

global $actualTagPost;
Route::post('/posts/findTag', function (Request $request) {
    $actualTagPost = $request->tag;
    $categories = Categorie::all();
    $tags = Tag::all();
    $news = Post::whereHas('tags', function($element) use ($actualTagPost) {
        $element->where('tags.id', $actualTagPost);
    })->paginate(4);
    return view('front/pages/classic-news', compact('news', 'tags', 'actualTagPost', 'categories'));
})->name("filterTagPost");
// Route

Route::get('events', function () {
    $events = Event::paginate(6);
    $categories = Categorie::all();
    foreach ($events as $event) {
            $event->date = str_replace("[", "<span>", $event->date);
            $event->date = str_replace("]", "</span>", $event->date);
        } 
    return view('front/pages/classic-events', compact('events', 'categories'));
})->name("events");

Route::get('news', function () {
    $news = Post::paginate(4);
    $categories = Categorie::all();
    $tags = Tag::all();
    return view('front/pages/classic-news', compact('news', 'categories', 'tags'));
})->name("news");

Route::get('contact', function () {
    $contact = Contact::all();
    return view('front/pages/contact', compact('contact'));
})->name("contact");

Route::get('/dashboard', function () {
    $messages = Message::All();
    $demandes = Demande::all();
    return view('dashboard', compact('messages', 'demandes'));
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
Route::get('/back/posts/search', [PostController::class, 'search'])->name('search');
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
// Message
Route::get('/back/messages', [MessageController::class, 'index'])->name('message.index');
Route::get('/back/messages/create', [MessageController::class, 'create'])->name('message.create');
Route::post('/back/messages/store', [MessageController::class, 'store'])->name('message.store');
Route::post('/back/messages/store2', [MessageController::class, 'store2'])->name('message.store2');
Route::get('/back/messages/{id}/read', [MessageController::class, 'read'])->name('message.read');
Route::get('/back/messages/{id}/edit', [MessageController::class, 'edit'])->name('message.edit');
Route::get('/back/messages/{id}/reply', [MessageController::class, 'reply'])->name('message.reply');
Route::post('/back/messages/{id}/update', [MessageController::class, 'update'])->name('message.update');
Route::post('/back/messages/{id}/updateReply', [MessageController::class, 'updateReply'])->name('message.updateReply');
Route::post('/back/messages/{id}/delete', [MessageController::class, 'destroy'])->name('message.destroy');
// Tag
Route::get('/back/tags', [TagController::class, 'index'])->name('tag.index');
Route::get('/back/tags/create', [TagController::class, 'create'])->name('tag.create');
Route::post('/back/tags/store', [TagController::class, 'store'])->name('tag.store');
Route::get('/back/tags/{id}/read', [TagController::class, 'read'])->name('tag.read');
Route::get('/back/tags/{id}/edit', [TagController::class, 'edit'])->name('tag.edit');
Route::post('/back/tags/{id}/update', [TagController::class, 'update'])->name('tag.update');
Route::post('/back/tags/{id}/delete', [TagController::class, 'destroy'])->name('tag.destroy');
// Categorie
Route::get('/back/categories', [CategorieController::class, 'index'])->name('categorie.index');
Route::get('/back/categories/create', [CategorieController::class, 'create'])->name('categorie.create');
Route::post('/back/categories/store', [CategorieController::class, 'store'])->name('categorie.store');
Route::get('/back/categories/{id}/read', [CategorieController::class, 'read'])->name('categorie.read');
Route::get('/back/categories/{id}/edit', [CategorieController::class, 'edit'])->name('categorie.edit');
Route::post('/back/categories/{id}/update', [CategorieController::class, 'update'])->name('categorie.update');
Route::post('/back/categories/{id}/delete', [CategorieController::class, 'destroy'])->name('categorie.destroy');
// Email
Route::get('/back/emails', [EmailController::class, 'index'])->name('email.index');
Route::get('/back/emails/create', [EmailController::class, 'create'])->name('email.create');
Route::post('/back/emails/store', [EmailController::class, 'store'])->name('email.store');
Route::get('/back/emails/{id}/read', [EmailController::class, 'read'])->name('email.read');
Route::get('/back/emails/{id}/edit', [EmailController::class, 'edit'])->name('email.edit');
Route::post('/back/emails/{id}/update', [EmailController::class, 'update'])->name('email.update');
Route::post('/back/emails/{id}/delete', [EmailController::class, 'destroy'])->name('email.destroy');
// MAIL
Route::post('/contact-form', [NewsletterController::class, 'storeContactForm'])->name('contact-form.store');
// Demande
Route::get('/back/demandes', [DemandeController::class, 'index'])->name('demande.index');
Route::get('/back/demandes/create', [DemandeController::class, 'create'])->name('demande.create');
Route::post('/back/demandes/store', [DemandeController::class, 'store'])->name('demande.store');
Route::post('/back/demandes/store2', [DemandeController::class, 'store2'])->name('demande.store2');
Route::get('/back/demandes/{id}/read', [DemandeController::class, 'read'])->name('demande.read');
Route::get('/back/demandes/{id}/edit', [DemandeController::class, 'edit'])->name('demande.edit');
Route::get('/back/demandes/{id}/reply', [DemandeController::class, 'reply'])->name('demande.reply');
Route::post('/back/demandes/{id}/update', [DemandeController::class, 'update'])->name('demande.update');
Route::post('/back/demandes/{id}/delete', [DemandeController::class, 'destroy'])->name('demande.destroy');
// Commentaire
Route::get('/back/commentaires', [CommentaireController::class, 'index'])->name('commentaire.index');
Route::get('/back/commentaires/create', [CommentaireController::class, 'create'])->name('commentaire.create');
Route::post('/back/commentaires/store', [CommentaireController::class, 'store'])->name('commentaire.store');
Route::get('/back/commentaires/{id}/read', [CommentaireController::class, 'read'])->name('commentaire.read');
Route::get('/back/commentaires/{id}/edit', [CommentaireController::class, 'edit'])->name('commentaire.edit');
Route::post('/back/commentaires/{id}/update', [CommentaireController::class, 'update'])->name('commentaire.update');
Route::post('/back/commentaires/{id}/delete', [CommentaireController::class, 'destroy'])->name('commentaire.destroy');
// Contact
Route::get('/back/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::get('/back/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
Route::post('/back/contacts/{id}/update', [ContactController::class, 'update'])->name('contact.update');
