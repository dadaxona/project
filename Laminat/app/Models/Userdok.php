<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdok extends Model
{
    use HasFactory;
    public $fillable = ['name','tel', 'firma', 'inn'];
    public $timestamps = true;
}
