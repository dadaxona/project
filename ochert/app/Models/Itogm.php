<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itogm extends Model
{
    use HasFactory;
    public $fillable = [
        'yonalish',
        'itog',
    ];
    public $timestamps = true;   
}
