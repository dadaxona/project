<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uze extends Model
{
    use HasFactory;
    public $fillable = [
        'tex',
        'summa',
        'status',
    ];
    public $timestamps = true;
}
