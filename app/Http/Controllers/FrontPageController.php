<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\BlogKonten;

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
}
