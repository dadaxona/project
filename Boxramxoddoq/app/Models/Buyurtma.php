<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyurtma extends Model
{
    use HasFactory;
    protected $fillable = [
        'summa',
        'status',
        'uuid'
    ];
    public $timestamps=true;
}
