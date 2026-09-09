<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\ContactMessage;
use App\Models\Course;
use App\Models\Faq;
use App\Models\FaqMessage;
use App\Models\Gallery;
use App\Models\JoinApplication;
use App\Models\JoinPage;
use App\Models\Team;
use App\Support\Media;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('frontend.pages.about');
    }

    public function courses(Request $request)
    {
        $query = Course::with('category')->latest();
        if ($request->filled('category')) {
            $query->where(function ($q) use ($request) {
                $q->where('category_id', $request->category)
                    ->orWhere('category_name', $request->category);
            });
        }

        return view('frontend.pages.courses', [
            'courses' => $query->get(),
            'categories' => Category::orderBy('title')->get(),
        ]);
    }

    public function courseDetail($id = null)
    {
        $course = $id
            ? Course::with('category')->findOrFail($id)
            : Course::with('category')->latest()->first();

        return view('frontend.pages.course-detail', compact('course'));
    }

    public function blog()
    {
        return view('frontend.pages.blog-grid', $this->blogData());
    }

    public function blogGridLeft()
    {
        return view('frontend.pages.blog-grid-left', $this->blogData());
    }

    public function blogGridRight()
    {
        return view('frontend.pages.blog-grid-right', $this->blogData());
    }

    public function blogListLeft()
    {
        return view('frontend.pages.blog-list-left', $this->blogData());
    }

    public function blogListRight()
    {
        return view('frontend.pages.blog-list-right', $this->blogData());
    }

    public function blogDetail($id = null)
    {
        $blog = $id ? Blog::findOrFail($id) : Blog::latest()->first();

        return view('frontend.pages.blog-detail', array_merge($this->blogData(), compact('blog')));
    }

    public function team()
    {
        return view('frontend.pages.team', [
            'teams' => Team::latest()->get(),
        ]);
    }

    public function teamDetail($id = null)
    {
        $team = $id ? Team::findOrFail($id) : Team::latest()->first();

        return view('frontend.pages.team-detail', compact('team'));
    }

    public function join()
    {
        return view('frontend.pages.join', [
            'join' => JoinPage::latest()->first(),
        ]);
    }

    public function joinApply(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'required|string|max:50',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        $data['cv'] = Media::store($request->file('cv'), 'upload/join');
        JoinApplication::create($data);

        return back()->with([
            'message' => 'Your application has been sent successfully',
            'alert-type' => 'success',
        ]);
    }

    public function gallery()
    {
        return view('frontend.pages.gallery', [
            'galleries' => Gallery::latest()->get(),
        ]);
    }

    public function faq()
    {
        return view('frontend.pages.faq', [
            'faqs' => Faq::latest()->get(),
            'contact' => Contact::latest()->first(),
        ]);
    }

    public function faqAsk(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'message' => 'required|string',
        ]);

        FaqMessage::create($data);

        return back()->with([
            'message' => 'Your question has been sent successfully',
            'alert-type' => 'success',
        ]);
    }

    public function contact()
    {
        return view('frontend.pages.contact', [
            'contact' => Contact::latest()->first(),
        ]);
    }

    public function contactSend(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'subject' => 'required|string|max:200',
            'message' => 'required|string',
        ]);

        ContactMessage::create($data);

        return back()->with([
            'message' => 'Your message has been sent successfully',
            'alert-type' => 'success',
        ]);
    }

    public function homeTwo()
    {
        return view('frontend.pages.home-2');
    }

    private function blogData(): array
    {
        $blogs = Blog::latest()->get();

        return [
            'blogs' => $blogs,
            'popularBlogs' => $blogs->take(3),
        ];
    }
}
