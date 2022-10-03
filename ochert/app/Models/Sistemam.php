<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistemam extends Model
{
    use HasFactory;
    public $fillable = [
        'zaqaz',
        'data',
    ];
    public $timestamps = true;
}
