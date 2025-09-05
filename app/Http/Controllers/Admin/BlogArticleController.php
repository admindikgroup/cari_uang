<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogKonten;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BlogArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogKontens = BlogKonten::all();
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
        ]);

        BlogKonten::create($request->all());

        return redirect()->route('admin.blog-article.index')->with('success', 'Blog content created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogKonten $blogKonten)
    {
        return view('admin.blog-article.show', compact('blogKonten'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogKonten $blogKonten)
    {
        $kategoris = Kategori::all();
        return view('admin.blog-article.edit', compact('blogKonten', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogKonten $blogKonten)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'id_kategori' => 'required|exists:kategori,id_kategori',
            'konten' => 'required|string',
        ]);

        $blogKonten->update($request->all());

        return redirect()->route('admin.blog-article.index')->with('success', 'Blog content updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogKonten $blogKonten)
    {
        $blogKonten->delete();
        return redirect()->route('admin.blog-article.index')->with('success', 'Blog content deleted successfully.');
    }
}
