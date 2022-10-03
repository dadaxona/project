<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praduct3 extends Model
{
    use HasFactory;
    protected $fillable = [
        'praduct2_id',
        'name',
        'file',
        'son',
        'sum',
        'summa',
        'kament'
    ];
    public $timestamps=true;
}
