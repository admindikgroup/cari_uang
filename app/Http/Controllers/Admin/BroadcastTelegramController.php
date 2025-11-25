<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BroadcastTelegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Telegram\Bot\Api;

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
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'konten_broadcast' => 'required|string',
            'expired' => 'required|date|after:now',
        ]);

        $message = new BroadcastTelegram();
        $message->title = $validated['title'];
        $message->konten_broadcast = $validated['konten_broadcast'];
        $message->expired = $validated['expired'];
        $message->created_by = Auth::id();
        $message->save();

        $telegram = new Api(config('services.telegram.bot_token'));
        $chatId = config('services.telegram.chat_id');

        // Bersihkan HTML
        $allowedTags = '<b><i><u><s><a><code><pre>';
        $cleanText = strip_tags($validated['konten_broadcast'], $allowedTags);
        $cleanText = str_replace(['<p>', '</p>', '<br>', '<br/>', '<br />'], "\n", $cleanText);
        $cleanText = trim($cleanText);

        $response = $telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => $cleanText,
            'parse_mode' => 'HTML',
        ]);

        return redirect()->route('admin.broadcast-telegram.index')
            ->with('success', 'Broadcast message created successfully with expiry date.');
    }



    public function edit(BroadcastTelegram $broadcastTelegram)
    {
        return view('admin.broadcast-telegram.edit', compact('broadcastTelegram'));
    }

    public function update(Request $request, BroadcastTelegram $broadcastTelegram)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'konten_broadcast' => 'required|string',
            'expired' => 'required|date|after:now',
        ]);

        $broadcastTelegram->update([
            'title' => $validated['title'],
            'konten_broadcast' => $validated['konten_broadcast'],
            'expired' => $validated['expired'],
        ]);

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