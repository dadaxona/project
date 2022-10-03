<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yigim extends Model
{
    use HasFactory;
    public $fillable = [
        'olish',
        'sotish',
        'qarz',
        'rasxod',
        'pribl'
    ];
    public $timestamps = true;
}
