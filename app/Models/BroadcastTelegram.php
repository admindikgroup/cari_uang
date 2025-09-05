<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BroadcastTelegram extends Model
{
    use HasFactory;

    protected $table = 'broadcast_message';
    protected $primaryKey = 'id_broadcast_message';

    protected $fillable = [
        'title',
        'konten_broadcast',
        'created_by',
        'updated_by',
    ];
}

