<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageMaster extends Model
{
    use HasFactory;

    protected $table = 'konten_master';
    protected $primaryKey = 'id_master_page';

    protected $fillable = [
        'page_kategori',
        'konten',
        'created_by',
        'updated_by',
    ];
}

