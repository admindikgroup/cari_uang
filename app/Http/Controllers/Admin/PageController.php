<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageMaster;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageMasters = PageMaster::all();
        return view('admin.manage-page.index', compact('pageMasters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.manage-page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'page_kategori' => 'required|integer',
            'title' => 'required|string',
            'subtitle' => 'required|string',
        ]);

        $konten = json_encode([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);

        PageMaster::create([
            'page_kategori' => $request->page_kategori,
            'konten' => $konten,
        ]);

        return redirect()->route('admin.manage-page.index')->with('success', 'Page content created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PageMaster $manage_page)
    {
        return view('admin.manage-page.show', compact('manage_page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PageMaster $manage_page)
    {
        $data = json_decode($manage_page->konten, true);
        $title = $data['title'] ?? '';
        $subtitle = data_get($data, 'subtitle', '');

        return view('admin.manage-page.edit', compact('manage_page', 'title', 'subtitle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PageMaster $manage_page)
    {
        $request->validate([
            'page_kategori' => 'required|integer',
            'title' => 'required|string',
            'subtitle' => 'required|string',
        ]);

        $konten = json_encode([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);

        $manage_page->update([
            'page_kategori' => $request->page_kategori,
            'konten' => $konten,
        ]);

        return redirect()->route('admin.manage-page.index')->with('success', 'Page content updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PageMaster $manage_page)
    {
        $manage_page->delete();
        return redirect()->route('admin.manage-page.index')->with('success', 'Page content deleted successfully.');
    }
}