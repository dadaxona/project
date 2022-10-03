<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Srokdata extends Model
{
    use HasFactory;
    protected $fillable = [
        'yil',
        'oy',
        'kun',
        'srok',
        'status',
        'holat'
    ];
    public $timestamps=true;
}
