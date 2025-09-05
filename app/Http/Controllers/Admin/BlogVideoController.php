<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogVideo;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $request->validate([
            'title' => 'required|string|max:255',
            'id_kategori' => 'required|exists:kategori,id_kategori',
            'video_url' => 'required|url',
            'alt_text' => 'nullable|string',
        ]);

        $video = new BlogVideo($request->all());
        $video->created_by = Auth::id();
        $video->save();

        return redirect()->route('admin.blog-video.index')->with('success', 'Video created successfully.');
    }

    public function edit(BlogVideo $blogVideo)
    {
        $categories = Kategori::all();
        return view('admin.blog-video.edit', compact('blogVideo', 'categories'));
    }

    public function update(Request $request, BlogVideo $blogVideo)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'id_kategori' => 'required|exists:kategori,id_kategori',
            'video_url' => 'required|url',
            'alt_text' => 'nullable|string',
        ]);

        $blogVideo->update($request->all());
        $blogVideo->updated_by = Auth::id();
        $blogVideo->save();

        return redirect()->route('admin.blog-video.index')->with('success', 'Video updated successfully.');
    }

    public function destroy(BlogVideo $blogVideo)
    {
        $blogVideo->delete();
        return redirect()->route('admin.blog-video.index')->with('success', 'Video deleted successfully.');
    }
}
