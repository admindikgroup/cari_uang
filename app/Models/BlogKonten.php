<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogKonten extends Model
{
    use HasFactory;

    protected $table = 'blog_konten';

    protected $primaryKey = 'id_blog_content';

    protected $fillable = [
        'title',
        'slug',
        'id_kategori',
        'konten',
        'image',
        'created_by',
        'updated_by',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }
}

