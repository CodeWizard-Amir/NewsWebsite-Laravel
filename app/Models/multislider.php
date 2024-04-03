<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multislider extends Model
{
    use HasFactory;
    protected $fillable =[
        'img',
        'imgalt',
        'position',
    ];
}
