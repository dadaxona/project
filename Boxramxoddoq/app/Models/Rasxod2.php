<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rasxod2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'summa',
    ];
    public $timestamps=true;
}
