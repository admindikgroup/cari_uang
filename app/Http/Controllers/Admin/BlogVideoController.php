<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogVideo;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogVideoController extends Controller
{
    public function index()
    {
        $videos = BlogVideo::with('kategori')->latest()->paginate(10);
        return view('admin.blog-video.index', compact('videos'));
    }

    public function create()
    {
        $categories = Kategori::all();
        return view('admin.blog-video.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'id_kategori' => 'required|exists:kategori,id_kategori',
            'video_url' => 'required|url',
            'alt_text' => 'nullable|string',
        ]);

        $slug = Str::slug($validated['title']);
        $count = BlogVideo::where('slug', 'LIKE', "{$slug}%")->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }
        $validated['slug'] = $slug;
        $validated['created_by'] = Auth::id();

        BlogVideo::create($validated);

        return redirect()->route('admin.blog-video.index')->with('success', 'Video created successfully.');
    }

    public function edit(BlogVideo $blogVideo)
    {
        $categories = Kategori::all();
        return view('admin.blog-video.edit', compact('blogVideo', 'categories'));
    }

    public function update(Request $request, BlogVideo $blogVideo)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'id_kategori' => 'required|exists:kategori,id_kategori',
            'video_url' => 'required|url',
            'alt_text' => 'nullable|string',
        ]);

        $slug = Str::slug($validated['title']);
        if ($slug !== $blogVideo->slug) {
            $count = BlogVideo::where('slug', 'LIKE', "{$slug}%")->where('id_blog_video', '!=', $blogVideo->id_blog_video)->count();
            if ($count > 0) {
                $slug .= '-' . ($count + 1);
            }
            $validated['slug'] = $slug;
        }
        $validated['updated_by'] = Auth::id();

        $blogVideo->update($validated);

        return redirect()->route('admin.blog-video.index')->with('success', 'Video updated successfully.');
    }

    public function destroy(BlogVideo $blogVideo)
    {
        $blogVideo->delete();
        return redirect()->route('admin.blog-video.index')->with('success', 'Video deleted successfully.');
    }
}