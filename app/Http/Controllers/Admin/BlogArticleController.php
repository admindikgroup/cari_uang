<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogKonten;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogKontens = BlogKonten::paginate(25);
        return view('admin.blog-article.index', compact('blogKontens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.blog-article.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'id_kategori' => 'required|exists:kategori,id_kategori',
            'konten' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $request->merge(['slug' => Str::slug($request->title)]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('public/images', $imageName);
            $data['image'] = $imageName;
        }

        BlogKonten::create($data);

        return redirect()->route('admin.blog-article.index')->with('success', 'Blog content created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogKonten $blog_article)
    {
        return view('admin.blog-article.show', compact('blog_article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogKonten $blog_article)
    {
        $kategoris = Kategori::all();
        return view('admin.blog-article.edit', compact('blog_article', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogKonten $blog_article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'id_kategori' => 'required|exists:kategori,id_kategori',
            'konten' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $request->merge(['slug' => Str::slug($request->title)]);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('public/images', $imageName);
            $data['image'] = $imageName;

            if ($blog_article->image) {
                Storage::delete('public/images/' . $blog_article->image);
            }
        }

        $blog_article->update($data);

        return redirect()->route('admin.blog-article.index')->with('success', 'Blog content updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogKonten $blog_article)
    {
        $blog_article->delete();
        return redirect()->route('admin.blog-article.index')->with('success', 'Blog content deleted successfully.');
    }
}