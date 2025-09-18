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
        'video_url',
        'alt_text',
        'created_by',
        'updated_by',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    public function getThumbnailUrlAttribute()
    {
        $videoId = '';
        $url_parts = parse_url($this->video_url);
        if (isset($url_parts['query'])) {
            parse_str($url_parts['query'], $query);
            if (isset($query['v'])) {
                $videoId = $query['v'];
            }
        }
        if (empty($videoId) && isset($url_parts['path'])) {
            $path_parts = explode('/', $url_parts['path']);
            $videoId = end($path_parts);
        }
        return 'https://img.youtube.com/vi/' . $videoId . '/hqdefault.jpg';
    }
}

