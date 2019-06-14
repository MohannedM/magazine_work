<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{

    protected $fillable = [
        'magazine_name', 'is_active', 'pdf_path', 'channel_id', 'cover_path'
    ];
}