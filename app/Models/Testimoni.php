<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $table = 'blog_testimoni';

    protected $primaryKey = 'id_blog_testimoni';

    protected $fillable = [
        'title',
        'slug',
        'konten',
        'image',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];

}

