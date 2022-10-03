<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benzin extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'summa',
    ];
    public $timestamps = true;
}
