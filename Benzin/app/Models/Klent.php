<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klent extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'qarz',
        'data',
    ];
    public $timestamps = true;
}
