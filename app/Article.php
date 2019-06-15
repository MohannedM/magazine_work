<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'article_title', 'article_content', 'user_id', 'magazine_id', 'article_cover', 'is_active'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
