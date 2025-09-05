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
            'konten' => 'required|string',
        ]);

        PageMaster::create($request->all());

        return redirect()->route('admin.manage-page.index')->with('success', 'Page content created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PageMaster $pageMaster)
    {
        return view('admin.manage-page.show', compact('pageMaster'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PageMaster $pageMaster)
    {
        return view('admin.manage-page.edit', compact('pageMaster'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PageMaster $pageMaster)
    {
        $request->validate([
            'page_kategori' => 'required|integer',
            'konten' => 'required|string',
        ]);

        $pageMaster->update($request->all());

        return redirect()->route('admin.manage-page.index')->with('success', 'Page content updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PageMaster $pageMaster)
    {
        $pageMaster->delete();
        return redirect()->route('admin.manage-page.index')->with('success', 'Page content deleted successfully.');
    }
}
