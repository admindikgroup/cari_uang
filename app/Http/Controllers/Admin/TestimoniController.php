<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonis = Testimoni::paginate(25);
        return view('admin.testimoni.index', compact('testimonis'));
    }

    public function create()
    {
        return view('admin.testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'konten' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slug = Str::slug($validated['title']);
        $count = Testimoni::where('slug', 'LIKE', "{$slug}%")->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }
        $validated['slug'] = $slug;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName);
            $validated['image'] = $imageName;
        }

        Testimoni::create($validated);

        return redirect()
            ->route('admin.testimoni.index')
            ->with('success', 'Testimoni content created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimoni $testimoni)
    {
        return view('admin.testimoni.show', compact('testimoni'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimoni $testimoni)
    {
        return view('admin.testimoni.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'konten' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slug = Str::slug($validated['title']);
        if ($slug !== $testimoni->slug) {
            $count = Testimoni::where('slug', 'LIKE', "{$slug}%")->where('id_testimoni', '!=', $testimoni->id_testimoni)->count();
            if ($count > 0) {
                $slug .= '-' . ($count + 1);
            }
            $validated['slug'] = $slug;
        }

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName);
            $validated['image'] = $imageName;

            if ($testimoni->image) {
                Storage::delete('public/images/' . $testimoni->image);
            }
        }

        $testimoni->update($validated);

        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni content updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni)
    {
        $testimoni->delete();
        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni content deleted successfully.');
    }
}