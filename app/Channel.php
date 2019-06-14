<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    //
    protected $fillable = [
        'channel_name', 'cover_path', 'is_active'
    ];
}
