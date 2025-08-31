<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontPageController extends Controller
{
    public function blog(): View
    {
        return view('blog');
    }

    public function detail(): View
    {
        return view('blog-details');
    }
}
