<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kassa extends Model
{
    use HasFactory;
    public $fillable = [
        'olish',
        'sotish',
        'uzqard',
        'humo',
        'qarz',
        'rasxod',
        'pribl',
    ];
    public $timestamps = true;
}
