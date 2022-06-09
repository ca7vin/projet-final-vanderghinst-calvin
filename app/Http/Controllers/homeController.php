<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Contact;
use App\Models\ContactForm;
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

class HomeController extends Controller
{
    public function index()
    {
            $slides = Slider::all();
            foreach ($slides as $slide) {
                $slide->title = str_replace("//", "<br>", $slide->title);
                $slide->text = str_replace("//", "<br>", $slide->text);
            } 
            $services = Service::all();
            $popularcourses = Course::where('status', true)->where("favori", 1)->get();
            $popularteachers = Prof::all();
            $lastnews = Post::orderBy('created_at', 'desc')->take(2)->get();
            $categories = Categorie::all();
            $profs = Prof::all();
            $courses = Course::where('status', true)->get();
            return view('index', compact('slides', 'services', 'popularcourses', 'popularteachers', 'lastnews', 'categories', 'courses', 'profs'));
    }

    public function coursesMain()
    {
            $courses = Course::where("status", true)->paginate(9);
            $categories = Categorie::all();
            return view('front/pages/courses-grid', compact('courses', 'categories'));
    }

    public function eventsMain() 
    {
            $events = Event::paginate(6);
            $categories = Categorie::all();
            foreach ($events as $event) {
                    $event->date = str_replace("[", "<span>", $event->date);
                    $event->date = str_replace("]", "</span>", $event->date);
                } 
            return view('front/pages/classic-events', compact('events', 'categories'));
    }

    public function newsMain() 
    {
            $news = Post::where('status', true)->paginate(4);
            $categories = Categorie::all();
            $tags = Tag::all();
            return view('front/pages/classic-news', compact('news', 'categories', 'tags'));
    }

    public function contact()
    {
            $contact = Contact::all();
            return view('front/pages/contact', compact('contact'));
    }

    public function dashboard()
    {
            $messages = Message::All();
            $demandes = Demande::all();
            $contactforms = ContactForm::all();
            return view('dashboard', compact('messages', 'demandes', 'contactforms'));
    }

    public function filterCatCourse(Request $request)
    {
        global $actualCatCourse;
            $actualCatCourse = $request->category;
            $categories = Categorie::all();
            $courses = Course::whereHas('categories', function($element) use ($actualCatCourse) {
                $element->where('categories.id', $actualCatCourse);
            })->paginate(9);
            return view('front/pages/courses-grid', compact('courses', 'categories', 'actualCatCourse'));
    }

    public function filterCatEvent(Request $request)
    {
        global $actualCatEvent;
            $actualCatEvent = $request->category;
            $categories = Categorie::all();
            $events = Event::whereHas('categories', function($element) use ($actualCatEvent) {
                $element->where('categories.id', $actualCatEvent);
            })->paginate(6);
            foreach ($events as $event) {
                $event->date = str_replace("[", "<span>", $event->date);
                $event->date = str_replace("]", "</span>", $event->date);
            } 
            return view('front/pages/classic-events', compact('events', 'categories', 'actualCatEvent'));
    }

    public function filterCatPost(Request $request)
    {
        global $actualCatPost;
        $actualCatPost = $request->category;
        $categories = Categorie::all();
        $tags = Tag::all();
        $news = Post::whereHas('categories', function($element) use ($actualCatPost) {
            $element->where('categories.id', $actualCatPost);
        })->paginate(4);
        return view('front/pages/classic-news', compact('news', 'categories', 'actualCatPost', 'tags'));
    }
    public function filterTagPost(Request $request)
    {
        global $actualTagPost;
        $actualTagPost = $request->tag;
        $categories = Categorie::all();
        $tags = Tag::all();
        $news = Post::whereHas('tags', function($element) use ($actualTagPost) {
        $element->where('tags.id', $actualTagPost);
        })->paginate(4);
        return view('front/pages/classic-news', compact('news', 'tags', 'actualTagPost', 'categories'));
    }
}
