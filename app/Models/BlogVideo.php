<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogVideo extends Model
{
    use HasFactory;

    protected $table = 'blog_video';

    protected $primaryKey = 'id_blog_video';

    protected $fillable = [
        'title',
        'id_kategori',
        'alt_text',
        'created_by',
        'updated_by',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }
}

