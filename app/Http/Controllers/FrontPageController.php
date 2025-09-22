<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\BlogKonten;
use App\Models\BlogVideo;
use Illuminate\Http\RedirectResponse;

class FrontPageController extends Controller
{
    public function blog(): View
    {
        $articles = BlogKonten::latest()->paginate(15);
        return view('blog', ['articles' => $articles]);
    }

    public function detail(BlogKonten $blog_article): View
    {
        return view('blog-details', ['article' => $blog_article]);
    }

    public function blogVideo(): View
    {
        $blog_video = BlogVideo::latest()->paginate(15);
        return view('blog-video', ['blog_video' => $blog_video]);
    }

    public function blogVideodetail(BlogVideo $blog_video): View
    {
        return view('blog-video-details', ['video' => $blog_video]);
    }

    public function contact(): View
    {
        return view('contact-us');
    }

    public function contactSubmit(Request $request): RedirectResponse
    {
        return redirect()->route('contact-us')->with('success', 'Your message has been sent successfully!');
    }
}