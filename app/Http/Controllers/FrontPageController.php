<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\BlogKonten;
use App\Models\BlogVideo;
use App\Models\Testimoni;
use App\Models\Faq;
use App\Models\Roadmap;
use App\Models\PageMaster;
use App\Models\Contact;
use App\Models\Subscriber;
use App\Models\CmsButton;
use Illuminate\Http\RedirectResponse;
use App\Models\BroadcastTelegram;
use Carbon\Carbon;

class FrontPageController extends Controller
{
    public function index(): View
    {
        $faqs = Faq::all();
        $banner = PageMaster::where('page_kategori', 1)
                    ->where('status_active', 1)
                    ->first();

        $banner_title = '';
        $banner_subtitle = '';
        if ($banner) {
            $banner_content = json_decode($banner->konten, true);
            $banner_title = $banner_content['title'] ?? '';
            $banner_subtitle = $banner_content['subtitle'] ?? '';
        }

        $cmsButtons = CmsButton::all();

        // Ambil broadcast yang belum expired
        $broadcasts = BroadcastTelegram::where('expired', '>', Carbon::now()) // hanya yang belum expired
            ->latest()
            ->get();


        return view('home', compact('faqs', 'banner_title', 'banner_subtitle', 'cmsButtons', 'broadcasts'));
    }

    public function blog(): View
    {
        $articles = BlogKonten::latest()->paginate(15);
        return view('blog', ['articles' => $articles]);
    }

    public function detail(BlogKonten $blog_article): View
    {
        return view('blog-details', ['article' => $blog_article]);
    }



    public function testimoni(): View
    {
        $articles = Testimoni::latest()->paginate(15);
        return view('testimoni', ['articles' => $articles]);
    }

    public function testimoniDetail(Testimoni $blog_testimoni): View
    {
        return view('testimoni-details', ['article' => $blog_testimoni]);
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact-us')->with('success', 'Your message has been sent successfully!');
    }

    public function subscribe(Request $request): RedirectResponse
    {
        $request->validate([
            'contact' => 'required|string|max:255',
        ]);

        Subscriber::create($request->all());

        return redirect()->route('home')->with('success', 'You have been subscribed successfully!');
    }
}