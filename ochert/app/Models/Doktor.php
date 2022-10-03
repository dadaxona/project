<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doktor extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'fam',
        'tel',
        'adress',
        'yonalish',
        'soni',
    ];
    public $timestamps = true;
}
