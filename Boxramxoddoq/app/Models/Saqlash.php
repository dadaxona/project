<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saqlash extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'file',
        'son',
        'sum',
    ];
    public $timestamps=true;
}
