<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'file',
    ];
    public $timestamps=true;
}
