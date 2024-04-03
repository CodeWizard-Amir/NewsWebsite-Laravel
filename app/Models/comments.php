<?php

namespace App\Models;
use App\Models\my_news;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment_id',
        'comment',
        'phone_number',
        'name',
        'status',

    ];



    public function news()
    {
        return $this->belongsTo(my_news::class , 'comment_id' , 'newsCode');
    }
}
