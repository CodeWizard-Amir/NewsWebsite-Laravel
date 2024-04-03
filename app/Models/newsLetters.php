<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newsLetters extends Model
{
    use HasFactory;
    protected $fillabel = [
        'name',
        'email',
        'p_number',
    ];
}
