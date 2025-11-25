<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BroadcastTelegram;

class TelegramWebhookController extends Controller
{
    public function handle(Request $request)
    {
        $update = $request->all();

        // Jika ada pesan dari channel
        if (isset($update['channel_post'])) {
            $post = $update['channel_post'];
            $chatId = $post['chat']['id'] ?? null;
            $messageText = $post['text'] ?? '';

            if ($chatId && $messageText) {
                BroadcastTelegram::create([
                    'title' => 'Auto from Channel',
                    'konten_broadcast' => $messageText,
                    'created_by' => null,
                ]);
            }
        }

        return response()->json(['ok' => true]);
    }
}
