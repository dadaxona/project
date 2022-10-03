<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praduct extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'img',
        'summa',
        'summa2',
    ];
    public $timestamps = true;
}
