<?php

namespace App\Models;
use App\Models\comments;
use App\Models\categories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class my_news extends Model
{
    use HasFactory;
    protected $fiilable =
    [
        'titleOfnews',
        'newsCode',
        'summeryOfnews',
        'imgOfnews',
        'imgaltOfnews',
        'cat_idOfnews',
        'link',
        'bodyOfnews',
    ];

    public function comments()
    {
        return $this->hasMany(comments::class , 'comment_id' , 'newsCode');
    }
    public function category()
    {
        return $this->belongsTo(categories::class , 'cat_idOfnews' , 'cat_code');
    }
}
