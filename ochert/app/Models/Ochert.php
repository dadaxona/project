<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ochert extends Model
{
    use HasFactory;
    public $fillable = [
        'user_id',
        'count',
        'status'
    ];
    public $timestamps = true;
}
