<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistika extends Model
{
    use HasFactory;
    public $fillable = ['foyda', 'kassa', 'pribl', 'limit'];
    public $timestamps = true;
}
