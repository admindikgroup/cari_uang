<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CmsButton;
use Illuminate\Http\Request;


class CmsButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buttons = CmsButton::all();
        return view('admin.cms-button.index', compact('buttons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cms-button.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url',
            'is_active' => 'required|boolean',
        ]);

        CmsButton::create($validated);

        return redirect()->route('admin.cms-button.index')->with('success', 'Button created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $button = CmsButton::findOrFail($id);
        return view('admin.cms-button.edit', compact('button'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url',
            'is_active' => 'required|boolean',
        ]);

        $button = CmsButton::findOrFail($id);
        $button->update($validated);

        return redirect()->route('admin.cms-button.index')->with('success', 'Button updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $button = CmsButton::findOrFail($id);
        $button->delete();

        return redirect()->route('admin.cms-button.index')->with('success', 'Button deleted successfully.');
    }
}
