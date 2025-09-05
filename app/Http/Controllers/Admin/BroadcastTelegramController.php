<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BroadcastTelegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BroadcastTelegramController extends Controller
{
    public function index()
    {
        $messages = BroadcastTelegram::latest()->paginate(10);
        return view('admin.broadcast-telegram.index', compact('messages'));
    }

    public function create()
    {
        return view('admin.broadcast-telegram.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'konten_broadcast' => 'required|string',
        ]);

        $message = new BroadcastTelegram($request->all());
        $message->created_by = Auth::id();
        $message->save();

        return redirect()->route('admin.broadcast-telegram.index')->with('success', 'Broadcast message created successfully.');
    }

    public function edit(BroadcastTelegram $broadcastTelegram)
    {
        return view('admin.broadcast-telegram.edit', compact('broadcastTelegram'));
    }

    public function update(Request $request, BroadcastTelegram $broadcastTelegram)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'konten_broadcast' => 'required|string',
        ]);

        $broadcastTelegram->update($request->all());
        $broadcastTelegram->updated_by = Auth::id();
        $broadcastTelegram->save();

        return redirect()->route('admin.broadcast-telegram.index')->with('success', 'Broadcast message updated successfully.');
    }

    public function destroy(BroadcastTelegram $broadcastTelegram)
    {
        $broadcastTelegram->delete();
        return redirect()->route('admin.broadcast-telegram.index')->with('success', 'Broadcast message deleted successfully.');
    }
}
