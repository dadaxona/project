<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summa extends Model
{
    use HasFactory;
    public $fillable = [
        'naqtsumma',
        'uzqardsumma',
        'humosumma',
        'data',
        'naqtsumma3'
    ];
    public $timestamps = true;
}
