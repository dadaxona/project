<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karzina2 extends Model
{
    use HasFactory;
    public $fillable = [
        'name', 
        'raqam',
        'soni', 
        'summa2',
        'itog',
        'tolov'
    ];
    public $timestamps = true;
}
