<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koshimcham extends Model
{
    use HasFactory;
    public $fillable = [
        'user_id',
        'uuid',
        'status',
    ];
    public $timestamps = true;
}
